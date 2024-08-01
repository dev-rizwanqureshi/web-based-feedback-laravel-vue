import { defineStore } from "pinia";
import { Modal } from "bootstrap";
import {router, usePage} from '@inertiajs/vue3'

export const authPinia = defineStore({
    id: 'auth',
    state: () => ({
        login: {
            email:'',
            password:'',
            error:'',
        },
        setTimeOutLoginError:null,
    }),
    getters: {
    },
    actions: {
        onLogin() {
            let vm = this;
            axios.post('api/login', vm.login)
                .then(response => {

                    localStorage.setItem('token', response.data.token);
                    axios.defaults.headers.common['Authorization'] = `Bearer ${response.data.token}`;
                    router.visit('/',{ method: 'get' });

                })
                .catch(error => {
                    console.log('error');
                    console.dir(error);
                    console.dir(error.response.status );
                    if (error.response.status === 422) {
                        vm.login.error = error.response.data.message;

                        if(vm.setTimeOutLoginError) {
                            clearTimeout(vm.setTimeOutLoginError)
                        }

                        vm.setTimeOutLoginError = setTimeout(() => {
                            vm.login.error = '';
                        }, 10000);

                    }
                })

        }
    },
})
