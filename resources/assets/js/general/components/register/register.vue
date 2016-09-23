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

                    <validator name="validation">

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama" v-model="name" v-validate:name="['required']" detect-change="off" detect-blur="off">
                            <p class="err-validation" v-show="$validation.name.touched && $validation.name.required">
                              Nama harus diisi
                            </p>
                        </div>

                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-control" v-model="email" v-validate:email="['required']">
                            <p class="err-validation" v-show="$validation.email.touched && $validation.email.required">
                              Email harus diisi
                            </p>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6">
                                    <select id="input" class="form-control" required="required" v-model="department" v-validate:departmen="['required']">
                                        <option value="">Pilih Jurusan</option>
                                        <option value="4036">Teknik Komputer dan Jaringan</option>
                                    </select>
                                    
                                    <p class="err-validation" v-show="$validation.departmen.touched && $validation.departmen.required">
                                          Pilih jurusan anda
                                    </p>

                                </div>
                                <div class="col-xs-6">
                                    <select id="input" class="form-control" required="required" v-model="graduateYear" detect-change="off" v-validate:graduateyear="['required']">
                                        <option value="">Tahun Lulus</option>
                                        <option value="2013">2013</option>
                                    </select>
                                    
                                    <p class="err-validation" v-show="$validation.graduateyear.touched && $validation.graduateyear.required">
                                          Pilih tahun lulus
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" v-model="password" v-validate:password="['required']">
                            <p class="err-validation" v-show="$validation.password.touched && $validation.password.required">
                              Password harus diisi
                            </p>
                        </div>

                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" id="input" value="0" v-model="gender" v-validate:gender="['required']">
                                    Pria
                                </label>

                                <label>
                                    <input type="radio" name="gender" id="input" value="1" v-model="gender" v-validate:gender="['required']">
                                    Wanita

                                </label>
                            </div>
                            <p class="err-validation" v-show="$validation.gender.touched && $validation.gender.required">
                              Pilih opsi
                            </p>
                        </div>

                        <div class="clearfix"></div>

                        <div class="form-group">
                            <button type="button" class="btn btn-default" @click="signup">Daftar</button>
                        </div>

                    </validator> 

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
        this.$validate(true)
        if (this.$validation.valid) {
          console.log(data)
        }
      }
    }
  }
</script>
