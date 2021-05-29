<template>
<div class="container">

        <form @submit.prevent="click">
        <div class="row">
            <div class="col-6">
                <div class="float-left">
                    <select id="t_city" name="t_city" placeholder="SELECT THEATRE:" v-model="form.selectedTheatre" class="btn btn-secondary" required>
                        <option value="" disabled>SELECT TEATRE:</option>
                        <option v-for="theatre in theatres" :key="theatre.id" :value="theatre.t_name+','+theatre.t_city">{{theatre.t_name}},{{theatre.t_city}}</option>
                    </select>
                </div>
               </div> 
               <div class="col-6">
                <select name="time" id="time" v-model="form.selectedTime" class="btn btn-secondary float-right">
                    <option class="btn btn-primary" value="9:00AM">9:00 AM</option>
                    <option class="btn btn-primary" value="12:00PM">12:00 PM</option>
                    <option class="btn btn-primary" value="3:00PM">3:00 PM</option>
                    <option class="btn btn-primary" value="6:00PM">6:00 PM</option>
                </select> 
            </div>
        </div>
            <div class="form-row mt-3">
                <div class="col">
                    Enter Names:<br>
                    <input type="text" class="form-control" placeholder="enter names" required>
                </div>
                <div class="col">
                    Enter Total Person:<br>
                    <input type="text" class="form-control" name="check" id="check" v-model="form.check" placeholder="enter total person" required>
                </div>
            </div>
               <br>  
            <a class="btn btn-primary" v-on:click="clk"> SELECT SEAT </a> 
        
        <div v-if="seen" class="row mt-5">
        R:<div class="col-3">
            <div v-for="n in 11 ">
                <input type="checkbox" id="item" :value="'R1'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" /> 
                <input type="checkbox" id="item" :value="'R2'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'R3'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'R4'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'R5'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'R6'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'R7'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'R8'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
                <input type="checkbox" id="item" :value="'R9'+n" v-model="checkitem" :disabled="checkitem.length >= form.check" />
            </div>
        </div>
        S:<div class="col-3">
            <div v-for="n in 8">
                <input type="checkbox" id="item" :value="'S1'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/> 
                <input type="checkbox" id="item" :value="'S2'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'S3'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'S4'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'S5'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'S6'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'S7'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'S8'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'S9'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
            </div>
        </div>
        T:<div class="col-3">
            <div v-for="n in 11">
                <input type="checkbox" id="item" :value="'T1'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/> 
                <input type="checkbox" id="item" :value="'T2'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'T3'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'T4'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'T5'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'T6'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'T7'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'T8'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
                <input type="checkbox" id="item" :value="'T9'+n" v-model="checkitem" :disabled="checkitem.length >= form.check"/>
            </div>
        </div>
        <div>
        <p class="float-left mt-5">Seat NO : {{checkitem}}</p>
            
                
            <button class="btn btn-warning float-right mt-5">Booking Confirm</button>
           </div>
        </div>
        
        </form>
</div>
</template>

<script>
    var id = window.location.href.split('/').pop();
    var date=new Date().toLocaleString();
     export default {
        data(){
            return{
               checkitem:[],
               seen :false,
               check:'',
               id:id,
               bookings:'',
               theatres:'',
               form: new Form({
                   selectedTime:'9:00AM',
                   selectedTheatre:'',
                    check:'',
                    id:id,
                })
            }

        },
        methods: {
            clk() {
                this.seen=true;
            },         
            gettheatre(){
                axios.get('/theatres/'+id).then((res)=>{
                    this.theatres=res.data
                }).catch((error)=>{
                    console.log(error)
                })
            },
            getbooking(){
                axios.get('/booking').then((res)=>{
                    this.bookings=res.data
                }).catch((error)=>{
                    console.log(error)
                })
            },
            click(){
                let data=new FormData();
                data.append('m_id',this.form.id)
                data.append('u_id',currentuser)
                data.append('TheatreName',this.form.selectedTheatre)
                data.append('time',this.form.selectedTime)
                data.append('seatno',this.checkitem)
                data.append('totalperson',this.form.check)
                data.append('date',date)
                axios.post('/booking',data)
               setTimeout(() => {  console.log("World!"); }, 3000);
                window.location.href = '/ticket/'+currentuser;
                
            }
        },
        mounted(){
            this.gettheatre()
            this.getbooking()
        }
    }
</script>
