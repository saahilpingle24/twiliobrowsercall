# Twilio Softphone using Laravel

Make calls from your browser using the Twilio API.

## Installation
* Clone this repository.
* Login to your Twilio account and create a TWIML app. For now keep the Request URL blank; note down the App SID.	
* Upload to heroku & create the following environment variables
	* TWILIO_ACCOUNT_SID
	* TWILIO_AUTH_TOKEN ()
	* TWILIO_APP_SID (SID for your TWIML app)
	* TWILIO_CLIENT_NAME (This can be anything)
	* TWILIO_NUMBER (The number that you get/buy from Twilio)
* After the code is deployed on heroku, note down the app URL and go to the TWIML app you created previously.
* Keep the Request URL as https://your_app_name.herokuapp.com/outbound and save it.

You are done! Navigate to your heroku app and dial the phone number you want to connect to! (Make sure you allow the browser to access device microphone & speakers)

PS: Free accounts can only make calls to the phone numbers that have been verified with Twilio beforehand!