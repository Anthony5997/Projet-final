let arrival = document.querySelector("#arrivalCityGuessData");
let departure = document.querySelector("#departureCityGuessData");
let divDepartureGuess = document.querySelector("#departureInput");
let divArrivalGuess = document.querySelector("#arrivalInput");
let currentSearch;

divDepartureGuess.addEventListener("input", (e)=> {
    currentSearch = e.target.value;
    departure.innerHTML = ''
    console.log(currentSearch);
    if(currentSearch.length > 2){
        fetch('http://projet-final.loc/trip/test/'+currentSearch)
        .then((response)=>{
            return response.json();
        }).then((results)=>{
            return(
                results.predictions.map((result) => {
                        departure.innerHTML += `<option value="${result.description}">${result.description}</option>`
                }) 
            )
        })
    }
})

divArrivalGuess.addEventListener("input", (e)=> {
    currentSearch = e.target.value;
    arrival.innerHTML = ''
    if(currentSearch.length > 2){
        fetch('http://projet-final.loc/trip/test/'+currentSearch)
        .then((response)=>{
            return response.json();
        }).then((results)=>{
            return(
                results.predictions.map((result) => {
                        arrival.innerHTML += `<option value="${result.description}">${result.description}</option>`
                }) 
            )
        })
    }
})