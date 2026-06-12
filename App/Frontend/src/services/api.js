import axios from 'axios';

const api = axios.create({
    baseURL: 'backend-projectt1.vercel.app', 
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json'
  }
});
  
export default api; 