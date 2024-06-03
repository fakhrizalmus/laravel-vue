<template>
    <div>
        <section>
            <h1>Daftar User</h1>
            <router-link to="/customer/create">Tambah</router-link>
            <ul>
                <li v-for="user in users">
                    <!-- <router-link :to="profile_uri(user.nama)">{{ user.nama }}</router-link> -->
                    <a href="" @click.prevent="lihatUser(user.id_customer)">{{ user.nama }}</a>
                </li>
            </ul>
        </section>
    </div>
</template>

<script>
import axios from 'axios';

    export default{
        data() {
            return {
                users: [],
            }
        },
        // watch: {
        //     '$route': 'getUsers'
        // },
        mounted() {
            this.getUsers()
        },  
        methods: {
            getUsers() {
                axios.get('/api/customer').then((res) => {
                    this.users = res.data
                    console.log(res);
                })
            },
            profile_uri(nama) {
                return '/customer/' + nama.toLowerCase()
            },
            lihatUser(id) {
                this.$router.push({
                    name: 'Profile',
                    params: {id: id}
                })
            }
        }
    }
</script>