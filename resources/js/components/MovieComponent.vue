<template>
<div class="container">
<div class="form-raw float-left w-50">
    <input type="text" v-model="search" class="form-control" placeholder="Search movie name.."/>
  </div>
<div class="row float-right mt-0">
    <form class="form-group">
        <label style="font-size:18px;">SELECT CITY:</label>
        <select name="city" id="city" v-model="selectedOption" class="btn btn-secondary">
            <option class="btn btn-primary" value="ahemdabad">Ahemdabad</option>
            <option class="btn btn-primary" value="navsari">Navsari</option>
            <option class="btn btn-primary" value="valsad">Valsad</option>
            <option class="btn btn-primary" value="Surat">Surat</option>
        </select> 
    </form>
    </div> <br>  <br>
    <div class="row mt-4">
        <div v-for="theatre in theatres" :key="theatre.id">
            <div v-if="selectedOption == theatre.t_city.toLowerCase()">
                <div v-for="movie in filterlist" :key="movie.id">
                    <div v-if="movie.id == theatre.m_id" > 
                        <div class="card mb-3 w-100" style="overflow: hidden;height:360px;background-color:#FAFEF9;">
                            <div class="row">
                                <div class="col-5">
                                    <a :href="'/view_movie_detail/'+movie.id"><img :src="'img/'+movie.image" class="card-img" alt="..."></a>
                                </div>
                               
                                <div class="col-7 ml-0">
                                    <div class="card-body">
                                            <div class="row"> 
                                                <div class="float-left col-9" style="font-size:16px;">
                                                    <a :href="'/view_movie_detail/'+movie.id" style="text-decoration:none;"><h2>{{movie.name}}</h2></a>
                                                    <p><b>Description:</b>{{movie.description}}</p>
                                                    <p><b>Director:</b>{{movie.director}}</p>
                                                    <p><b>Teatre Name:</b> {{theatre.t_name}}</p>
                                                    <p><b>Teatre City:</b> {{theatre.t_city}}</p>
                                                </div>       
                       
                                                <div class="float-right col-2 mt-2">
                                                    <a :href="'/book/'+movie.id" class="btn btn-success"><i class="fa fa-ticket" style="font-size:48px"></i></a>
                                                </div>
                    
                                            </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>


                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</template>

<script>
     export default {
        data(){
            return{
                search:'',
                movies:'',
                theatres:'',
                selectedOption:'ahemdabad',
            }

        },
         computed: {
    filterlist() {
      return this.movies.filter(movie => {
        return movie.name.toLowerCase().includes(this.search.toLowerCase())
      })
    }
  },
        methods: {
        getmovies(){
                axios.get('/movie').then((res)=>{
                    this.movies=res.data
                }).catch((error)=>{
                    console.log(error)
                })
            },
            gettheatre(){
                axios.get('/theatre').then((res)=>{
                    this.theatres=res.data
                }).catch((error)=>{
                    console.log(error)
                })
            }   
        },
        mounted(){
            this.getmovies()
            this.gettheatre()
        }
    }
</script>
