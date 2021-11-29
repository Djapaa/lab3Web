
class Values{
    constructor(selectors) {
     
        this.data=[];
        this.selectors=selectors;
        this.selectors.add.onclick=()=>this.Add();
        this.selectors.shuffle.onclick=()=>this.shuffle();
        this.selectors.LastOption.onclick=()=>this.LastOption();
        this.selectors.printArray.onclick=()=>this.printArray();
    }
    Add()
    {
        let item={
            'text':this.selectors.input.value,
            'option':this.selectors.selectOption.value
        }
        this.data.push(item);
        this.selectors.input.value="";
        
        this.selectors.selectOption.options[0].selected=true
        console.log(item);
 
    }


    LastOption(){
        
        console.log(this.data[this.data.length-1].option);
    }

    shufflee(myArray) {
        var index, valueIndex; 
        for (var i=0; i<=myArray.length-1; i++) {
        index = Math.floor(Math.random()*i);
        valueIndex = myArray[index];
        myArray[index] = myArray[i];
        myArray[i] = valueIndex;
            }
            return myArray;
        }

    shuffle()
    {
        this.shufflee(this.data)
        console.log(this.data)
    }
    printArray(){
        console.log(this.data);
    }
}
let v = new Values(
    {
        'input': document.getElementById('input'),
        'selectOption': document.getElementById('UsersList'),
        'add': document.getElementById('AddButton'),
        'shuffle': document.getElementById('ShuffleButton'),
        'LastOption': document.getElementById('LastOptionButton'),
        'printArray': document.getElementById('printArrayButton'),

    }
)









// class User{
//     constructor(text,option){
//         this.text=text;
//         this.option=option;
//     }
// }

// var Users = [] 

// function Add(){
  
//     const form = document.getElementById("form");

//     const text= form.textarea.value; 
//     console.log(text);
//     var option= form.optionslist.value;
//     console.log(option);
//     const user = new User (text, option);
//     Users.push(user);//добовляет элемент массива в конец и возрващает новую длину массива
//     form.textarea.value = "";
//     form.optionslist.options[0].selected = true;
// }

// function shufflee(myArray) {
//     var index, valueIndex; 
//     for (var i=0; i<=myArray.length-1; i++) {
//      index = Math.floor(Math.random()*i);
//     valueIndex = myArray[index];
//     myArray[index] = myArray[i];
//      myArray[i] = valueIndex;
//         }
//         return myArray;
//       }

//       function shuffle()
//       {
//           shufflee(Users)
//           console.log(Users)
//       }

// function printArray(){
//   console.log(Users);
// }
// function LastOption(){
//     // let userOP=Users[Users.length - 1]

//     // console.log(userOP['option'])
    
    
//     console.log(Users[User.length-1].option) 
// }
