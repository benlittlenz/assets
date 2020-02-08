import Home from './components/Home'
import About from './components/About'
import DashboardLayout from './components/DashboardLayout'

//Auth Components
import AuthLayout from './components/AuthLayout'
import Register from './components/Register'
import Login from './components/Login'
import ResetEmail from './components/ResetEmail'
import ResetPassword from './components/ResetPassword'

import NotFound from './components/NotFound'

export default {
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/about',
            component: About
        }
    ]
}