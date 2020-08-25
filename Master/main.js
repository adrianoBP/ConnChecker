const axios = require('axios');

async function Main(){

    const res = await MakeRequest();
    console.log(res);

}

const MakeRequest = async () => {
    try {
        const response = await axios.get('https://projectsherlock.ddns.net/Projects/ConnChecker/main.php', {
            timeout: 5000
        })
        return response.data;
    } catch (error) {
        return {
            errorMessage: error.message,
            errorCode: error.code
        }
    }
}

Main();