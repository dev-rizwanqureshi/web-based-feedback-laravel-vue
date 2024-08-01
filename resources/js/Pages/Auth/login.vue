<script setup>
import {Head} from '@inertiajs/vue3'
import { authPinia } from "@/Store/auth.js";

</script>

<template>
<Head>
    <title>Login - Feedback</title>
</Head>
    <div class="container">
        <div class="login-form">

            <h2>Login</h2>

            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" v-model="authPinia().login.email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" v-model="authPinia().login.password">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <div class="login-error text-danger text-center p-3">{{ authPinia().login.error }}</div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary w-100" @click="authPinia().onLogin()">Login</button>
            </div>

        </div>

    </div>
</template>

<style scoped>

.container {
    display: flex;
    align-items: center;
    height: 100vh;
}

.login-form {
    width: 500px;
    max-width: 90%;
    margin: 0 auto;
}

.login-error {
    height: 60px;
}

</style>
