import axios from 'axios';

const api = axios.create({
    baseURL: 'https://vercel.app', 
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json'
  }
});
  
export default api; 