<template>
    <div class="mail-app">
         <table  id="mailTable">
        <tbody >
        <tr v-for="email in  emails" :key="email">
         <td class="inbox-small-cells">
         <input type="checkbox" class="mail-checkbox">
         </td>
                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                         <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                          <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                        <td class="view-message  dont-show">{{email.from}}</td>
                        <td class="view-message ">{{email.text}}</td>
                        <td class="view-message  inbox-small-cells">mai<i class="fa fa-paperclip"></i></td>
                         <td class="view-message ">Added a new class: Login Class Fast Site</td>
                        <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                         <td class="view-message ">Added a new class: Login Class Fast Site</td>
                        <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                        <td class="view-message  text-right">9:27 AM</td>
    </tr>
        </tbody>
         </table>
       
       
    </div>
</template>
<script>
  export default {
       
        data() {
            return {
                
                
                email: [],
                
                
               
            };
        },
         created() {
            axios.get('/getmail')
                .then((response) => {
                    this.email = response.data;
                    console.log(response)
                });
           
        },
  }

</script>


<style  lang="scss" scoped>
#mailTable {
    background-color: chartreuse;
    
}
tr{
    background-color: crimson;
}
   
</style>
