var ruta = document.querySelector("[name=route]").value;

var apiAlumno= ruta + "/apiAlumno";


new Vue({
    http: {
        headers: {
          'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')

        }
      },
    el: "#alumno",

    data:{
        alumnos:[],

        matricula:'',
        nombres:'',
        apellido_p:'',
        apellido_m:'',
        semestre:'',
        grupo:'',
        estado:'',
        agregando:true,
        buscar:'',
        id:'',


    },
    created:function(){
        this.obtenerAlumnos();
    },

    methods:{
        obtenerAlumnos:function(){
            this.$http.get(apiAlumno).then(function(json){
                this.alumnos = json.data;
            }).catch(function(json){
                console.log(json);
            });
        },

        mostrarModal:function(){
            this.agregando=true;
            this.matricula='';
            this.nombres='';
            this.apellido_p='';
            this.apellido_m='';
            this.semestre='';
            this.grupo='';
            this.estado='';
            $('#modalAlumno').modal('show');
        },

        guardarAlumno:function(){
            var alumno={
                matricula:this.matricula,
                nombres:this.nombres,
                apellido_p:this.apellido_p,
                apellido_m:this.apellido_m,
                semestre:this.semestre,
                grupo:this.grupo,
                estado:this.estado
            };
            
            this.$http.post(apiAlumno, alumno).then(function(json){
                this.obtenerAlumnos();
                this.matricula='';
                this.nombres='';
                this.apellido_p='';
                this.apellido_m='';
                this.semestre='';
                this.grupo='';
                this.estado='';

            }).catch(function(json){
                console.log(json);
            });
            
            $('#modalAlumno').modal('hide');

            console.log(json);
            
        },
        confirmar:function(id){
            this.$http.delete(apiAlumno + '/' + id).then(function(json){
                this.obtenerAlumnos();
            }).catch(function(Error){
                console.error(Error);
            });
        },
    
        editandoAlumno:function(id){
            this.agregando=false;
            this.id=id;

            this.$http.get(apiAlumno + '/' + id).then(function(json){
                
                this.matricula=json.data.matricula;
                this.nombres=json.data.nombres;
                this.apellido_p=json.data.apellido_p;
                this.apellido_m=json.data.apellido_m;
                this.semestre=json.data.semestre;
                this.grupo=json.data.grupo;
                this.estado=json.data.estado;
                
            }).catch(function(json){
                console.log(json);
            });

            $('#modalAlumno').modal('show');
        },
        actualizarAlumno:function(){
            var jsonAlumno = {
                matricula:this.matricula,
                nombres:this.nombres,
                apellido_p:this.apellido_p,
                apellido_m:this.apellido_m,
                semestre:this.semestre,
                grupo:this.grupo,
                estado:this.estado
            };
            this.$http.patch(apiAlumno + '/' + this.id, jsonAlumno).then(function(json){
                this.obtenerAlumnos();
            }).catch(function(json){
                    console.log('Oh noooo!!');
                    console.log(json)
            });

            $('#modalAlumno').modal('hide');
        }
    
    },
    computed:{
        filtroAlumnos:function(){
            return this.alumnos.filter((alumno)=>{
                return alumno.nombres.toLowerCase().match(this.buscar.toLowerCase().trim()) ||
                alumno.matricula.toLowerCase().match(this.buscar.toLowerCase().trim()) ||
                alumno.apellido_p.toLowerCase().match(this.buscar.toLowerCase().trim()) 
            });
        }

    }
});