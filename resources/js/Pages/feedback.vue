<script setup>

import { utilityPinia } from '../Store/utility.js'
import Nav from "../Components/Nav.vue";

</script>

<template>


    <Nav />

    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <h2>Feedback</h2>
            </div>
            <div class="col-6 text-end">
                <a href="#" @click="utilityPinia().onClickAddFeedback()" class="btn btn-primary">Add Feedback</a>
            </div>
        </div>

        <div>
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Feedback</th>
                    <th>User</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>mary@example.com</td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>july@example.com</td>
                </tr>
                </tbody>
            </table>



            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>

        </div>

    </div>


    <div class="modal" id="addFeedBack">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Feedback</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3 mt-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="email" class="form-control" id="title" placeholder="Enter title" name="title">
                    </div>

                    <div class="mb-3 mt-3">
                        <select class="form-select">
                            <option>Select Category</option>
                            <option>Category 1</option>
                            <option>Category 2</option>
                            <option>Category 2</option>
                        </select>
                    </div>


                    <div class="mb-3 mt-3">
                        <label for="description">Description:</label>
                        <textarea class="form-control" rows="5" id="description" name="text"></textarea>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>

            </div>
        </div>
    </div>

</template>

<style scoped>

</style>
