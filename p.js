let person = {
        firstName : 'john',
        lastName : 'rambo',
        fullname :  function(){
            return this.firstName +" "+ this.lastName;
        },
        age : 40,
        heir: "brown"

    
 }

 for(let x in person){
     console.log(person[x]);
 }