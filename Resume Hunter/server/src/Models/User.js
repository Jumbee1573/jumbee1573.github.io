import mongoose, { Schema } from 'mongoose';

const userModel = new Schema({
    username : {
        type: String,
        unique: true,
        required: true,
        minLength: 5
    },
    password : {
        type: String,
        required: true,
        minLength: 5
    }
})
 
const User = mongoose.model('User', userModel);

export default User;