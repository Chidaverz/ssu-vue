import { APP_CONFIG } from "../config.js";

export default {
    getCafes: function () {
        return axios.get(APP_CONFIG.API_URL + '/cafes');
    },
    getCafe: function (cafeID) {
        return axios.get(APP_CONFIG.API_URL + '/cafes/' + cafeID);
    },
    postAddNewCafe: function (name, address, city, state, zip) {
        return axios.post(APP_CONFIG.API_URL + '/cafes', {
            name: name,
            address: address,
            city: city,
            state: state,
            zip: zip
        })
    }
}