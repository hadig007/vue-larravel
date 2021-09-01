<template>
    <div>
        <h6 class="text-uppercase text-secondary">Check Availability</h6>
        <div class="form-row">
            <div class="form-group col-sm-6 ">
                <label for="from" class="label-control">From</label>
                <input type="text" 
                name="from" 
                class="form-control form-control-sm" 
                placeholder="start date"
                v-model="from">
            </div>
            <div class="form-group col-md-6 ">
                <label for="to" class="label-control">to</label>
                <input type="text" 
                name="to" class="form-control form-control-sm" 
                placeholder="end date" 
                v-model="to">
            </div>
            <button type="submit" @click="check" class="btn btn-secondary btn-block mb-2">Check</button>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            from:null,
            to: null
        }
    },
    methods:{
        check(){
            alert('let me check');
        }
    }
}
</script>

<style scoped>
    label{
        font-size: 0.7rem;
        font-weight: bolder;
        color: grey;
        text-transform: uppercase;
    }
</style>