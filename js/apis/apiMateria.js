var ruta = document.querySelector("[name=route]").value;

var apiMateria= ruta + "/apiMateria";
var apiDocente= ruta + "/apiDocente";


new Vue({
    http: {
        headers: {
          'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
        }
      },
    el: "#materia",

    data:{
        materias:[],
        docentes:[],

        nombre:'',
        grupos:'',
        semestre:'',
        formacion:'',
        agregando:true,
        id_docente:'',
        nombres:'',
        buscar:'',
        id_materia:'',


    },
    created:function(){
        this.obtenerMaterias();
        this.obtenerDocentes();
    },

    methods:{
        obtenerMaterias:function(){
            this.$http.get(apiMateria).then(function(json){
                this.materias = json.data;
            }).catch(function(json){
                console.log(json);
            });
        },

        mostrarModal:function(){
            this.agregando=true;
            this.nombre='';
            this.grupos='';
            this.semestre='';
            this.formacion='';
            this.id_docente='';
            $('#modalMateria').modal('show');
        },

        guardarMateria:function(){
            var materia={
                nombre:this.nombre,
                grupos:this.grupos,
                semestre:this.semestre,
                formacion:this.formacion,
                id_docente:this.id_docente
            };
            
            this.$http.post(apiMateria, materia).then(function(json){
                this.obtenerMaterias();
                this.nombre='';
                this.grupos='';
                this.semestre='';
                this.formacion='';
                this.id_docente='';

            }).catch(function(json){
                console.log(json);
            });
            
            $('#modalMateria').modal('hide');

            console.log(materia);
            
        },
        confirmar:function(id){
            this.$http.delete(apiMateria + '/' + id).then(function(json){
                this.obtenerMaterias();
            }).catch(function(Error){
                console.error(Error);
            });
        },
    
        editandoMateria:function(id){
            this.agregando=false;
            this.id_materia=id;

            this.$http.get(apiMateria + '/' + id).then(function(json){
                
                this.nombre=json.data.nombre;
                this.grupos=json.data.grupos;
                this.semestre=json.data.semestre;
                this.formacion=json.data.formacion;
                this.nombres=json.data.nombres;

            }).catch(function(json){
                console.log(json);
            });

            $('#modalMateria').modal('show');
        },
        actualizarMateria:function(){
            var jsonMateria = {
                nombre:this.nombre,
                grupos:this.grupos,
                semestre:this.semestre,
                formacion:this.formacion,
                id_docente:this.id_docente
            };
            this.$http.patch(apiMateria + '/' + this.id_materia, jsonMateria).then(function(json){
                this.obtenerMaterias();
            }).catch(function(json){
                console.log('Oh noooo!!');
                console.log(json)
        });

            $('#modalMateria').modal('hide');
        },
        obtenerDocentes:function(){
            this.$http.get(apiDocente).then(function(json){
                this.docentes=json.data;
            });
        }
    
    },
    computed:{
        filtroMaterias:function(){
            return this.materias.filter((materia)=>{
                return materia.nombre.toLowerCase().match(this.buscar.toLowerCase().trim()) ||
                       materia.formacion.toLowerCase().match(this.buscar.toLowerCase().trim())
            });
        }

    }
});