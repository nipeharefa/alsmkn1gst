<template>
    <div class="container containerRegister">

        <div class="row">

            <div class="col-md-5">
                <h1>Hai !!</h1>
                <p>Alumni</p>
            </div>

            <div class="col-md-2">
                <div class="lineVertical">
                </div>
                <p style="text-align:center"></p>
            </div>

            <div class="col-md-5">

                <div class="registrationForm">

                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" v-model="email">
                    </div>

                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control" v-model="password">
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-default" @click="login">Login</button>
                    </div>


                </div>

            </div>

        </div>
    </div>
</template>

<style scoped>
    .containerRegister {
        margin-top:30px
    }
</style>


<script>
  /*eslint-disable no-console*/
  export default {
    data () {
      return {
        email: '',
        password: ''
      }
    },
    methods: {
      _signup () {

      },
      login () {
        const data = {
          email: this.email,
          password: this.password
        }

        this.$http.post('/login', data, []).then((res) => {
          console.log(res)
        }).catch((err) => {
          console.warn(err.statusText)
        })
      }
    }
  }
</script>
