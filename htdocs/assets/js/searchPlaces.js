let arrivalSearch = document.querySelector("#arrivalCitySearchData");
let departureSearch = document.querySelector("#departureCitySearchData");
let divDepartureSearch = document.querySelector("#departureInputSearch");
let divArrivalSearch = document.querySelector("#arrivalInputSearch");
let currentDeparture;
let currentArrival;

divDepartureSearch.addEventListener("input", (e)=> {
    currentDeparture = e.target.value;
    departureSearch.innerHTML = ''
    console.log("Current Departure", currentDeparture);
    if(currentDeparture.length > 2){
        fetch('http://projet-final.loc/trip/searchDeparture/'+currentDeparture)
        .then((response)=>{
            return response.json();
        }).then((results)=>{
            return(
                results.map((result) => {
                    departureSearch.innerHTML += `<option value="${result.departure}">${result.departure}</option>`
                }) 
            )
        })
    }
})

divArrivalSearch.addEventListener("input", (e)=> {
    currentArrival = e.target.value;
    arrivalSearch.innerHTML = ''
    if(currentArrival.length > 2){
        fetch('http://projet-final.loc/trip/searchArrival/'+currentArrival)
        .then((response)=>{
            return response.json();
        }).then((results)=>{
            return(
                results.map((result) => {
                    arrivalSearch.innerHTML += `<option value="${result.arrival}">${result.arrival}</option>`
                }) 
            )
        })
    }
})