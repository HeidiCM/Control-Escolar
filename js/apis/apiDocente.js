var ruta = document.querySelector("[name=route]").value;

var apiDocente= ruta + "/apiDocente";


new Vue({
    http: {
        headers: {
          'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
        }
      },
    el: "#docente",

    data:{
        docentes:[],

        rfc:'',
        nombres:'',
        apellido_p:'',
        apellido_m:'',
        sexo:'',
        telefono:'',
        correo:'',
        direccion:'',
        agregando:true,
        rfc_docente:'',
        buscar:'',
        id_docente:'',


    },
    created:function(){
        this.obtenerDocentes();
    },

    methods:{
        obtenerDocentes:function(){
            this.$http.get(apiDocente).then(function(json){
                this.docentes = json.data;
            }).catch(function(json){
                console.log(json);
            });
        },

        mostrarModal:function(){
            this.agregando=true;
            this.rfc='';
            this.nombres='';
            this.apellido_p='';
            this.apellido_m='';
            this.sexo='';
            this.telefono='';
            this.correo='';
            this.direccion='';
            $('#modalDocente').modal('show');
        },

        guardarDocente:function(){
            var docente={
                rfc:this.rfc,
                nombres:this.nombres,
                apellido_p:this.apellido_p,
                apellido_m:this.apellido_m,
                sexo:this.sexo,
                telefono:this.telefono,
                correo:this.correo,
                direccion:this.direccion
            };
            
            this.$http.post(apiDocente, docente).then(function(json){
                this.obtenerDocentes();
                this.rfc='';
                this.nombres='';
                this.apellido_p='';
                this.apellido_m='';
                this.sexo='';
                this.telefono='';
                this.correo='';
                this.direccion='';

            }).catch(function(json){
                console.log(json);
            });
            
            $('#modalDocente').modal('hide');

            console.log(docente);
            
        },
        confirmar:function(id){
            this.$http.delete(apiDocente + '/' + id).then(function(json){
                this.obtenerDocentes();
            }).catch(function(Error){
                console.error(Error);
            });
        },
    
        editandoDocente:function(id){
            this.agregando=false;
            this.id_docente=id;

            this.$http.get(apiDocente + '/' + id).then(function(json){
                
                this.rfc=json.data.rfc;
                this.nombres=json.data.nombres;
                this.apellido_p=json.data.apellido_p;
                this.apellido_m=json.data.apellido_m;
                this.sexo=json.data.sexo;
                this.telefono=json.data.telefono;
                this.correo=json.data.correo;
                this.direccion=json.data.direccion;
            }).catch(function(json){
                console.log(json);
            });

            $('#modalDocente').modal('show');
        },
        actualizarDocente:function(){
            var jsonDocente = {
                rfc:this.rfc,
                nombres:this.nombres,
                apellido_p:this.apellido_p,
                apellido_m:this.apellido_m,
                sexo:this.sexo,
                telefono:this.telefono,
                correo:this.correo,
                direccion:this.direccion
            };
            this.$http.patch(apiDocente + '/' + this.id_docente, jsonDocente).then(function(json){
                this.obtenerDocentes();
            }).catch(function(json){
                console.log('Oh noooo!!');
                console.log(json)
        });

            $('#modalDocente').modal('hide');
        }
    
    },
    computed:{
        filtroDocentes:function(){
            return this.docentes.filter((docente)=>{
                return docente.nombres.toLowerCase().match(this.buscar.toLowerCase().trim()) ||
                       docente.apellido_p.toLowerCase().match(this.buscar.toLowerCase().trim()) ||
                       docente.rfc.toLowerCase().match(this.buscar.toLowerCase().trim())
            });
        }

    }
});