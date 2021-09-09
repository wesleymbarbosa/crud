<template>
    <div>
        <h3 class="text-center">Add Dev</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addDev">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" v-model="dev.nome" required>
                    </div>
                    <div class="form-group">
                        <label>Sexo</label><br>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="sexo" id="sexo_m" v-model="dev.sexo" value="M">
                          <label class="form-check-label" for="sexo_m">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="sexo" id="sexo_f" v-model="dev.sexo" value="S" >
                          <label class="form-check-label" for="sexo_f">Feminino</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Idade</label>
                        <input type="number" class="form-control" v-model="dev.idade" min="0" max="100">
                    </div>
                    <div class="form-group">
                        <label>Hobby</label>
                        <input type="text" class="form-control" v-model="dev.hobby">
                    </div>
                    <div class="form-group">
                        <label>Data Nacimento</label>
                        <input type="date" class="form-control" v-model="dev.datanascimento">
                    </div>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                dev: {}
            }
        },
        methods: {
            addDev() {

                this.axios
                    .post('http://crud/api/developers', this.dev)
                    .then(response => (
                        this.$router.push({nome: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>