<template>
<div class="container">
<form @submit.prevent="savedata">
        @csrf

        <div class="form-group">
            <label for="d_branch">name</label>
            <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="d_branch">Description</label>
            <input type="text" class="form-control form-control-sm" name="desc" placeholder="Enter Description">
        </div>
        <div class="form-group">
            <label for="d_branch">Director</label>
            <input type="text" class="form-control form-control-sm" name="director" placeholder="Enter Directoe">
        </div>
        <div class="form-group">
            <label for="d_branch">rate</label>
            <input type="number" class="form-control form-control-sm" name="rate" placeholder="Enter Rate">
        </div>
        <div class="form-group">
            <label for="d_branch">image</label>
            <input type="file" class="form-control form-control-sm" name="image" placeholder="option 1">
        </div>
        

        <input type="submit" name="btnIns" value="Insert Data">
    </form>
</div>
</template>

<script>

     export default {
        data(){
            return{
                 form: new Form({
                    name:'',
                    desc:'',
                    director:'',
                    rate:'',
                    
                })
            }

        },
        methods: {
            clk() {
                 
            }
        },
        mounted(){
        }
    }
</script>
