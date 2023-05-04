import axios from 'axios';
import "@fortawesome/fontawesome-free/css/all";

axios.get('https://jsonplaceholder.typicode.com/posts')
    .then(response => {
        console.log(response.data);
    })
    .catch(error => {
        console.error(error);
    });
import axios from 'axios'
const instance = axios.create({
    baseURL: 'https://example.com',
    headers: {
        'content-type':'application/octet-stream',
        'x-rapidapi-host':'example.com',
        'x-rapidapi-key': process.env.RAPIDAPI_KEY
    },
});
export default {
    getData: () =>
        instance({
            'method':'GET',
            'url':'/query',
            'params': {
                'search':'parameter',
            },
        }),
    postData: () =>
        instance({
            'method': 'POST',
            'url':'/api',
            'data': {
                'item1':'data1',
                'item2':'item2'
            },
            'headers': {
                'content-type':'application/json'  // override instance defaults
            }
        })
}