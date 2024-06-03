<template>
    <div>
        <h1>Register</h1>
        <form @submit.prevent="handleSubmit()" action="/customer" method="POST">
            <div class="input-group">
                <label>Nama</label>
                <input type="text" v-model="form.nama">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" v-model="form.email">
            </div>
            <div class="input-group">
                <label>No HP</label>
                <input type="text" v-model="form.noHp">
            </div>
            <div>
                <label for="jenisKelamin">Jenis Kelamin</label>
                <select name="jenisKelamin" id="jenisKelamin" v-model="form.jenisKelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <!-- <div class="input-group">
                <label>Jenis Kelamin</label>
                <input type="button">
            </div> -->
            <div class="input-group">
                <label>Tgl Lahir</label>
                <input type="date" v-model="form.tglLahir">
            </div>
            <button type="submit">Simpan</button>            
        </form>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            form: {
                nama: '',
                email: '',
                noHp: '',
                jenisKelamin: '',
                tglLahir: ''
            }
        }
    },
    methods: {
        handleSubmit() {
            console.log(this.form);
            axios.post('/api/customer', this.form).then((res) => {
                console.log(res);
            }).catch((err) => {
                console.log(err);
            })
        }
    }
}
</script>
    <style>
        .input-group {
            margin-bottom: 5px
        }
    </style>