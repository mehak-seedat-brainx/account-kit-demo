
// initialize Account Kit with CSRF protection
AccountKit_OnInteractive = function(){
    AccountKit.init(
        {
            appId:"394994917899761",
            state:document.getElementById("state"),
            version:"v1.1",
            debug: true,
            fbAppEventsEnabled:true,
            redirect:"login",

        }
    );
};

// login callback
function loginCallback(response) {
    if (response.status === "PARTIALLY_AUTHENTICATED") {
        var code = response.code;
        var csrf = response.state;
        // Send code to server to exchange for access token
    }
    else if (response.status === "NOT_AUTHENTICATED") {
        // handle authentication failure
    }
    else if (response.status === "BAD_PARAMS") {
        // handle bad parameters
    }
}

// phone form submission handler
function smsLogin() {
    var countryCode = document.getElementById("country_code").value;
    var phoneNumber = document.getElementById("phone_number").value;
    AccountKit.login(
        'PHONE',
        {countryCode: countryCode, phoneNumber: phoneNumber}, // will use default values if not specified
        loginCallback
    );
}


// email form submission handler
function emailLogin() {
    var emailAddress = document.getElementById("email").value;
    AccountKit.login(
        'EMAIL',
        {emailAddress: emailAddress},
        loginCallback
    );
}


