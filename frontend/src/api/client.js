import axios from "axios";
import config from "@/config/api";

window.axios = axios.create({
  baseURL: config.url
});

window.axios.defaults.headers.common["Accept"] = "application/json";
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
window.axios.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

export default window.axios;