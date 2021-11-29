function getRandomInt(max) {
    return Math.floor(Math.random() * max);
    
  }
  alert(getRandomInt(10));
  
  const add = ()=>{
    document.formtask.textarea.value +=getRandomInt(10);
    
}

const onlyNumber= e =>
{
    const value = e.value;
    e.value=value.replace(/\D/g, '')
}
  function plus()
  {
      let num1;
      let num2;
      let res;

     if(document.getElementById('num1').value&&document.getElementById('num2').value)
     {

        num1 = parseInt(document.getElementById('num1').value);
         
         num2 = parseInt(document.getElementById('num2').value);
         
         res = num1+num2;
         
         alert(res);
    }
    else{
        alert('Пустое поле');
    }
  }