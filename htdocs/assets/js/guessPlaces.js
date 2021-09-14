let arrival = document.querySelector("#arrivalCityGuessData");
let departure = document.querySelector("#departureCityGuessData");
let divDepartureGuess = document.querySelector("#departureInput");
let divArrivalGuess = document.querySelector("#arrivalInput");
let currentSearch;
let token = 'AIzaSyDNwlL_Fbumi8lvNKIctvzrIKxiSZITz7I';



// function valueSetter(data){
//     console.log("log de la value", data) 
// }

divDepartureGuess.addEventListener("input", (e)=> {

    currentSearch = e.target.value;

    divDepartureGuess.innerHTML = ''

    fetch('http://projet-final.loc/trip/test/'+currentSearch)
    .then((response)=>{
        return response.json();
    }).then((results)=>{
        console.log("RESULT : ", results)
        let before = null
        return(

               results.predictions.map((result) => {
                   if (before !== null && result.description !== before) {
                       departure.innerHTML += `<option value="${result.description}">${result.description}</option>`
                    }
                 before = results.description
            }) 
        )
    })
})


divArrivalGuess.addEventListener("input", (e)=> {

    currentSearch = e.target.value;

    divArrivalGuess.innerHTML = ''

    fetch('http://projet-final.loc/trip/test/'+currentSearch)
    .then((response)=>{
        return response.json();
    }).then((results)=>{
        console.log("RESULT : ", results)
        let before = null
        return(

               results.predictions.map((result) => {
                   if (before !== null && result.description !== before) {
                    arrival.innerHTML += `<option value="${result.description}">${result.description}</option>`
                    }
                 before = results.description
            }) 
        )
    })
})
