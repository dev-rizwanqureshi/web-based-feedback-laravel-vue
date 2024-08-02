<script setup>

import { utilityPinia } from '../Store/utility.js'
import Nav from "../Components/Nav.vue";

</script>

<template>


    <Nav />

    <div class="container py-5">

        <h2>Feedback title here</h2>
        <small class="text-gray-50">Category here</small>

        <p>Description goes here  goes here  goes here  goes here  goes here  goes here  goes here  goes here  goes here  goes here  goes here  goes here  goes here  goes here  goes here  goes here  goes here  goes here  goes here </p>

        <div>
            <div>

                <div>
                    <label for="description">Comments</label>
                </div>


                <div class="mb-3 mt-3">
                    <label for="description">Comment here:</label>
                    <textarea class="form-control mt-2" id="description" name="text"></textarea>
                </div>
            </div>
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
