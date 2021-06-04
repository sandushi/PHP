import axios from 'axios';
import React, {useState, useEffect} from 'react';
import RecordList from './RecordList'

const View = () => {

    const [students, setStudents] = useState([]);

    useEffect(() => {
        axios.get('http://localhost/ReactPHPCRUD/view.php')
        .then(response => {
            setStudents(response.data)
        })
        .catch(err => {
            console.log(err);
        })
        
    }, []);

    const userList =()=>{
        return students.map((student,i) => {
            return <RecordList obj = {student} key={i} />
        })
    }
    return ( 
        <div>
            <h3 align="center">Users List</h3>
            <table className="table table-stripped" style={{marginTop: 20}}>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th colSpan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {userList()}
                </tbody>
            </table>
        </div>
     );
}
 
export default View;