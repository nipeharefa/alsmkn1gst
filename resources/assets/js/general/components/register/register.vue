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
                        <input type="text" class="form-control" placeholder="Nama" v-model="name">
                    </div>

                    <div class="form-group">
                        <input type="email" placeholder="Email" class="form-control" v-model="email">
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-6">
                                <select id="input" class="form-control" required="required" v-model="department">
                                    <option value="">Pilih Jurusan</option>
                                    <option value="4036">Teknik Komputer dan Jaringan</option>
                                </select>
                            </div>
                            <div class="col-xs-6">
                                <select id="input" class="form-control" required="required" v-model="graduateYear">
                                    <option value="">Tahun Lulus</option>
                                    <option value="2013">2013</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" v-model="password">
                    </div>

                    <div class="form-group">
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" id="input" value="0" v-model="gender">
                                Pria
                            </label>

                            <label>
                                <input type="radio" name="gender" id="input" value="1" v-model="gender">
                                Wanita

                            </label>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="form-group">
                        <button type="button" class="btn btn-default" @click="signup">Daftar</button>
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
  export default {
    data () {
      return {
        name: '',
        email: '',
        password: '',
        department: '',
        graduateYear: '',
        gender: ''
      }
    },
    methods: {
      _signup () {

      },
      signup () {
        const data = {
          name: this.name,
          email: this.email,
          password: this.password,
          department: this.department,
          graduateyear: this.graduateYear,
          gender: this.gender
        }
        this.$http.post('/register', data, []).then((res) => {
          console.log(res.data)
        })
      }
    }
  }
</script>
