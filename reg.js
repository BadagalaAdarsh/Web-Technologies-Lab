
const name = /^[a-zA-Z_\ ]+$/;
const regage = /^[0-9]{1,2}$/;
const regpassword = /^[A-Za-z0-9\[\]!@#$%^&*()_+\\":';<>?,./]{8,30}$/;
const regphnumber = /^[0-9]{10}$/;



function validate()
{
//   ---------------------reg.html--------------------------
    if(!( name.test(form.firstname.value)))
    {
        alert("Please Enter Correct firstname");
        // form.firstname.title="hahaha";
        form.firstname.focus();
        return false;
    }
    else if (!( name.test(form.lastname.value)))
    {
      alert("Please Enter Correct lastname");
      form.lastname.focus();
      return false;
    }

    else if (!( regage.test(form.age.value)))
    {
      alert("Please Enter Correct age");
      form.age.focus();
      return false;
    }

    else if (!( regpassword.test(form.password.value)))
    {
      alert("Please Enter Correct password");
      form.password.focus();
      return false;
    }

    else if (!(form.password.value == form.cpassword.value))
    {
      alert("Passwords are not matched");
      form.cpassword.focus();
      return false
    }

    else if (!(regphnumber.test(form.phnumber.value)))
    {
      alert("Please Enter Correct phone number");
      form.phnumber.focus();
      return false;
    }

    else if (!(name.test(form.specialization.value)))
    {
      alert("Please Enter Correct specialization");
      form.specialization.focus();
      return false;
    }
    else
    {
      return true;
    }
}
    //   ---------------------reg.html--------------------------



    //   ---------------------doctor.html--------------------------

function validate2()
{

    if(!(name.test(doctor_form.name.value)))
    {
        alert("Please Enter Correct name");
        // form.firstname.title="hahaha";
        doctor_form.name.focus();
        // console.log("fuckoff");
        return false;
    }


        else if(!( name.test(doctor_form.qualification.value)))
        {
            alert("Please Enter Correct Qualification");
            // form.firstname.title="hahaha";
            doctor_form.qualification.focus();
            return false;
        }

        else if(!( name.test(doctor_form.specialization.value)))
        {
            alert("Please Enter Correct Specialization");
            // form.firstname.title="hahaha";
            doctor_form.specialization.focus();
            return false;
        }

        else if(!( name.test(doctor_form.experience.value)))
        {
            alert("Please Enter Correct Experience");
            // form.firstname.title="hahaha";
            doctor_form.experience.focus();
            return false;
        }

        else
        {
            return true;
        }
}
//   ---------------------doctor.html--------------------------


//   ---------------------login.html--------------------------

function login_validate()
{
    if(!(name.test(login_form.username.value)))
    {
        alert("Please Enter Correct username");
        login_form.username.focus();
        return false;
    }

    else if(!(regpassword.test(login_form.password.value)))
    {
        alert("Please Enter Correct password");
        login_form.password.focus();
        return false;
    }

    else
    {
      return true;
    }

}
//   ---------------------login.html--------------------------

function department_validate()
{
  if(!(name.test(department_form.id.value)))
  {
      alert("Please Enter Correct Id");
      login_form.id.focus();
      return false;
  }


  else if(!(name.test(department_form.name.value)))
  {
      alert("Please Enter Correct name");
      login_form.name.focus();
      return false;
  }

  else if(!(name.test(department_form.block_name.value)))
  {
      alert("Please Enter Correct Block Name");
      login_form.block_name.focus();
      return false;
  }

  else
  {
    return true;
  }

}





function appointment_validate()
{
  if(!(name.test(appointment_form.name.value)))
  {
      alert("Please Enter Correct Name");
      appointment_form.name.focus();
      return false;
  }

  else if(!(name.test(appointment_form.guardianname.value)))
  {
      alert("Please Enter Correct Guardian Name");
      appointment_form.guardianname.focus();
      return false;
  }

  else if(!(name.test(appointment_form.guardianname.value)))
  {
      alert("Please Enter Correct Guardian Name");
      appointment_form.guardianname.focus();
      return false;
  }

  else if(!(regphnumber.test(appointment_form.phnumber.value)))
  {
      alert("Please Enter Correct Phonr Number");
      appointment_form.phnumber.focus();
      return false;
  }

  else if(!(regage.test(appointment_form.age.value)))
  {
      alert("Please Enter Correct Age");
      appointment_form.age.focus();
      return false;
  }

  else if(!(name.test(appointment_form.location.value)))
  {
      alert("Please Enter Correct location");
      appointment_form.location.focus();
      return false;
  }

  else
  {
      return true;
  }
