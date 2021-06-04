import axios from 'axios';
import React , {useEffect, useState}from 'react';
import { useParams } from 'react-router-dom';
import {Redirect} from 'react-router';


const Edit = () => {

    const params = useParams()

// yuo can find all params from here
    //console.log(params.id)

    const [firstName, setFirstName] = useState("");
    const [lastName, setLastName] = useState("");
    const [email, setEmail] = useState("");
    const [redirect, setRedirect] = useState(false);



    useEffect(() => {
        axios.get('http://localhost/ReactPHPCRUD/getById.php?id=' + params.id)
        .then(res => {

            //console.log(res.data)
            setFirstName(res.data.fName)
            setLastName(res.data.lName)
            setEmail(res.data.email)
        })
        .catch (err => {
            console.log(err)
        })
    
    }, [params.id]);

    const updateFunction = (e) => {
        e.preventDefault();

        const obj = {
            //sId : params.id,
            firstName : firstName,
            lastName : lastName,
            email : email
        };

        axios.post('http://localhost/ReactPHPCRUD/update.php?id=' + params.id, obj)
        .then(res =>
            setRedirect(true)
            );

    }

    if(redirect){
        return <Redirect to ='/view' />
    }
    //console.log("hello")
    return ( 
            <div style={{marginTop: 10}}>
            <h3>Edit User</h3>
            <form onSubmit={updateFunction}>
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
                    <input type="submit" className="form-control" vlaue="Edit User" className="btn btn-primary"/>
                </div>
            </form>
            
        </div>
         );
     
}
 
export default Edit;