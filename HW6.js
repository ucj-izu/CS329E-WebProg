
    function monthlyPayment() {
    
        principal = parseFloat(document.getElementById('principal').value)
        rate = parseFloat(document.getElementById('interest').value)
        term = parseFloat(document.getElementById('term').value)

        if ((principal <= 0) || (rate <= 0) || (term <= 0)) {
            alert("Please input a positive number.")
        }

        if (isNaN(principal) || isNaN(rate) || isNaN(term)) {
            alert("Please input a number.")
        }

        if (rate >= 1 ){ 
            alert("Please enter a rate between 0 and 1.")
        }

        console.log(principal)
        console.log(rate)
        console.log(term)
        
        monthlyPay = principal * (rate/12) / (1 - (1/((1 + (rate/12))**term)))
        
        document.getElementById('monthly_pay').value = monthlyPay.toFixed(2)
        document.getElementById('sum').value = (monthlyPay * term).toFixed(2)
        document.getElementById('interest_pay').value = ((monthlyPay*term) - principal).toFixed(2)
    }
