import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// added after security check
window.axios.defaults.headers.common['X-Frame-Options'] = 'DENY';
window.axios.defaults.headers.common['Content-Security-Policy'] = "frame-ancestors 'none'";