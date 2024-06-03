<template>
    <div>
        <section v-if="name">
            <h1>Halo {{ $route.params.name }}</h1>
            <router-link to="/user">Kembali</router-link>
        </section>
        <section v-else>
            <h1>Daftar User</h1>
            <ul>
                <li v-for="user in users">
                    <router-link :to="profile_uri(user.nama)">{{ user.nama }}</router-link>
                </li>
            </ul>
        </section>
    </div>
</template>

<script>
    export default{
        props: ['name'],
        data() {
            return {
                users: [
                    {
                        id: 1, nama: 'rizal'
                    },
                    {
                        id: 2, nama: 'Fakhri'
                    }
                ]
            }
        },
        methods: {
            profile_uri(nama) {
                return '/user/' + nama.toLowerCase()
            }
        }
    }
</script>