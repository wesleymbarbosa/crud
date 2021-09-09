<template>
    <div>
        <h3 class="text-center">Lista de Desenvolvedores</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center">ID</th>
                <th>Nome</th>
                <th class="text-center">Sexo</th>
                <th class="text-center">Idade</th>
                <th>Hobby</th>
                <th class="text-center">Data Nascimento</th>
                <th class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="dev in devs" :key="dev.id">
                <td class="text-center">{{ dev.id }}</td>
                <td>{{ dev.nome }}</td>
                <td class="text-center">{{ dev.sexo }}</td>
                <td class="text-center">{{ dev.idade }}</td>
                <td>{{ dev.hobby }}</td>
                <td class="text-center">{{ dev.datanascimento | formatDate }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: dev.id }}" class="btn btn-primary">Editar
                        </router-link>
                        <button class="btn btn-danger" @click="deleteDev(dev.id)">Excluir</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                devs: []
            }
        },
        created() {
            this.axios
                .get('http://crud/api/developers')
                .then(response => {
                    this.devs = response.data;
                });
        },
        methods: {
            deleteDev(id) {
                this.axios
                    .delete(`http://crud/api/developers/${id}`)
                    .then(response => {
                        let i = this.devs.map(item => item.id).indexOf(id);
                        this.devs.splice(i, 1)
                    });
            }
        }
    }
</script>