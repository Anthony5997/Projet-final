    let displayCardDiv = document.querySelector('#card-travel');
    let currentId = document.getElementById('idTripFetch').value;
    console.log("CURRENT ID : ", currentId);
        fetch('http://projet-final.loc/trip/'+currentId+'/route_request')
        .then((response)=>{
            console.log("RESPONSE ITINERAIRE :", response);
            return response.json();
        }).then((results)=>{
            console.log("RESULT : ", results)
            fetchResult(results.routes[0].legs[0].duration.text, results.routes[0].legs[0].distance.text, currentId)
            return (displayCardDiv.innerHTML += `
                <p>${results.routes[0].legs[0].distance.text}</p>
                <p>${results.routes[0].legs[0].duration.text}</p>`
            )
        })


        function fetchResult(duration, distance, currentId){

          let formInfo = new FormData();
          console.log("DURATION : ", duration);
          console.log("DISTANCE : ", distance);
          formInfo.append('duration', duration);
          formInfo.append('distance', distance);
          fetch('http://projet-final.loc/trip/treatment/'+currentId, {
              method:'post',
              body: formInfo
          }).then((response)=>{
            return response.json()
          }).then((results)=>{


           if (results.message) {
             console.error(results.message)
             
           }
         })
        }