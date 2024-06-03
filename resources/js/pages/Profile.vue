<template>
    <div>
        <section v-if="id">
            <h1>Halo {{ detailUser.nama }}</h1>
            <h2>Alamat: {{ detailUser.alamat }}</h2>
            <router-link to="/customer">Kembali</router-link>
        </section>
    </div>
</template>

<script>
import axios from 'axios';

    export default{
        props: ['id'],
        data() {
            return {
                detailUser: {}
            }
        },
        mounted() {
            this.getUser()
        },  
        methods: {
            getUser() {
                axios.get('/api/customer/' + this.id).then((res) => {
                    this.detailUser = res.data
                    console.log(this.detailUser);
                })
            }
        }
    }
</script>