const button= document.getElementById('location');
function gotlocation(position){
console.log(position);
}
function failedtoget(){
    console.log('there was a problem')
}
button.addEventListener('click',async()=>{
const result = navigator.geolocation.getCurrentPosition(gotlocation,failedtoget)
});