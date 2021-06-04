import React, {useState} from 'react';
import axios from 'axios';

const Insert = () => {

    const [firstName, setFirstName] = useState("");
    const [lastName, setLastName] = useState("");
    const [email, setEmail] = useState("");

    const onsubmit = (e)=>{
        e.preventDefault();

        const obj = {
            firstName : firstName,
            lastName : lastName,
            email : email
        };

        axios.post('http://localhost/ReactPHPCRUD/insert.php', obj)
        .then(res=>console.log(res.data));

        setFirstName("");
        setLastName("");
        setEmail("");

    }

    return ( 
        <div style={{marginTop: 10}}>
        <h3>Add New User</h3>
        <form onSubmit={onsubmit}>
            <div className="form-group">
                <label>First Name:</label>
                <input type="text" className="form-control" value={firstName} onChange={(e) =>setFirstName(e.target.value)}/>
            </div>
            <div className="form-group">
                <label>Last Name:</label>
                <input type="text" className="form-control" value={lastName} onChange={(e) =>setLastName(e.target.value)}/>
            </div>
            <div className="form-group">
                <label>Email:</label>
                <input type="text" className="form-control" value={email} onChange={(e) =>setEmail(e.target.value)} />
            </div>
            <div className="form-group">
                <input type="submit" className="form-control" vlaue="Register User" className="btn btn-primary"/>
            </div>
        </form>
        
    </div>
     );
}
 
export default Insert;