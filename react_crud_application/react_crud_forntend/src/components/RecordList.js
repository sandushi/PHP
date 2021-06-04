import axios from 'axios';
import React, { useState } from 'react';
import {Redirect} from 'react-router';
import {Link } from 'react-router-dom';

const RecordList = ({obj}) => {

    const [redirect, setRedirect] = useState(false);

    const deleteFunction=()=>{
        console.log(obj.sId)
        axios.get('http://localhost/ReactPHPCRUD/delete.php?id='+obj.sId)
        .then(
            setRedirect(true)
        )
        .catch(err => console.log(err))
    }
    if(redirect){
        return <Redirect to='/view' />
    }

    return ( 
        <tr>
            <td>
                {obj.fName}
            </td>
            <td>
                {obj.lName}
            </td>
            <td>
                {obj.email}
            </td>
            <td>
                <Link to={"/edit/"+obj.sId} className="btn btn-primary">Edit</Link>
            </td>
            <td>
                <button className="btn btn-danger" onClick={()=>deleteFunction()}>Delete</button>
            </td>
        </tr>
     );
}
 
export default RecordList;