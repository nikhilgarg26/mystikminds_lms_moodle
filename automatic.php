<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    window.onload = function() {
        var options = {
            "key": "<?php echo $keyId; ?>", // Ensure you're echoing the key ID correctly
            "amount": "<?php echo $amount; ?>", // Amount is in currency subunits. Default currency is INR
            "name": "<?php echo $title; ?>",
            "description": "A wild ride",
            "image": "img/mmlogo.png",
            "handler": function(response) {
                // Show an alert or some indication of processing
                // alert('Processing your payment, please wait...')

                // Prepare the data to be sent
                const postData = {
                    razorpay_payment_id: response.razorpay_payment_id,
                    razorpay_order_id: response.razorpay_order_id,
                    razorpay_signature: response.razorpay_signature,
                    firstname: "<?php echo $firstname; ?>",
                    lastname: "<?php echo $lastname; ?>",
                    email: "<?php echo $email; ?>",
                    courseid: "<?php echo $courseid; ?>",
                    amount: "<?php echo $amount; ?>",
                    user_id: "<?php echo $_SESSION['user_id']; ?>",
                    phno: "<?php echo $phno; ?>",
                };

                // Use fetch to send data to verify.php
                fetch('verify.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: Object.keys(postData).map(key => encodeURIComponent(key) + '=' + encodeURIComponent(postData[key])).join('&')
                    })
                    .then((response) => {
                        return response.json();
                    })
                    .then(data => {
                        if (!data.verified) {
                            alert("Will be updated soon!!")
                        }
                        window.location.href = 'coursedetail.php?courseid=<?php echo $courseid; ?>'; // redirect if needed
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('There was an error processing your payment!');
                    });
            },
            "prefill": {
                "name": "<?php echo $firstname . ' ' . $lastname; ?>",
                "email": "<?php echo $email; ?>",
                "contact": "<?php echo $phno; ?>"
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#ff6f0f"
            },
            "order_id": "<?php echo $razorpayOrderId; ?>", // Ensuring it's treated as a string
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    };
</script>