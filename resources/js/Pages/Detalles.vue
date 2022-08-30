<template>
    <app-layout>
    <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Detalles de {{paciente.nombre}}</h2>
        </template>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <form class="mb-6">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                            <div class="grid grid-cols-1">
                                 <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nombre</label>
                                 <input 
                                 id="nombre"
                                 v-model="form.nombre"
                                 class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" disabled/>
                            </div>
                       
                       
                            <div class="grid grid-cols-1">
                                 <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Diagnostico</label>
                                 <input 
                                  id="diagnostico"
                                 v-model="form.diagnostico"
                                 class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" disabled/>
                            </div>
                            <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Edad</label>
                    <input         
                        id="diagnostico"
                        v-model="form.edad"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Edad" 
                    disabled/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha de Valoracion</label>
                    <input         
                        id="diagnostico"
                        v-model="form.fecha_valoracion"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Fecha de Valoracion" 
                    disabled/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Telefono</label>
                    <input         
                        id="diagnostico"
                        v-model="form.telefono"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Telefono" 
                    disabled/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Direccion</label>
                    <input         
                        id="diagnostico"
                        v-model="form.direccion"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Direccion" 
                    disabled/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Historial</label>
                    <input         
                        id="diagnostico"
                        v-model="form.historial"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Historial" 
                    disabled/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Observaciones</label>
                    <input         
                        id="diagnostico"
                        v-model="form.observaciones"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Observaciones" 
                    disabled/>
                </div>
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Seguimiento</label>
                    <input         
                        id="diagnostico"
                        v-model="form.seguimiento"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Seguimiento" 
                    disabled/>
                </div>
                            <div class="grid grid-cols-1">
                                 <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Especialidad</label>
                                 <input 
                                  id="id_especialidad"
                                 v-model="form.id_especialidad"
                                 class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" disabled/>
                            </div>
                            
                       </div>
                    
                    
                    </form>

                </div>
            
            </div>
        
        
        
        </div>
    
    
    
    
    
    </app-layout>
    
</template>
<script>
import AppLayout from "@/Layouts/AppLayout"
export default {
    components:{
        AppLayout,

    },
    props:["paciente"],
    data() {
        return {
            form:{
                nombre:this.$props.paciente.nombre,
                diagnostico:this.$props.paciente.diagnostico,
                edad: this.$props.paciente.edad,
                fecha_valoracion: this.$props.paciente.fecha_valoracion,
                telefono: this.$props.paciente.telefono,
                direccion: this.$props.paciente.direccion,
                historial: this.$props.paciente.historial,
                observaciones: this.$props.paciente.observaciones,
                seguimiento: this.$props.paciente.seguimiento,
                id_especialidad:this.$props.paciente.id_especialidad,
            }
        }
    },
}
</script>
<style lang="">
    
</style>