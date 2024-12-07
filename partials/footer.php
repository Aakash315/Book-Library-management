<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $("#forms").on('submit',function(e){
                // e.preventDefault();

                let titleValidation = $("#title").val();
                // console.log(x);
                if(!titleValidation){
                    window.alert("Title must be required");
                    return false;
                }

                let authorVaolidation = $("#author").val();
                if(!authorVaolidation){
                    window.alert("Author must be required");
                    return false;
                }

                let max =4;
                let yearValidation = $("#publication_year").val();
                let charlength = yearValidation.length;
                if(!yearValidation){
                    window.alert("Year must be required");
                    return false;
                }else if (charlength > max) {
                    window.alert("year must 4 digit");
                    return false;
                }else if (yearValidation < 1900) {
                    window.alert("Year must be upto 1900");
                    return false;
                }else if (yearValidation > (new Date()).getFullYear()) {
                    window.alert("Year must be Contain Maximum Current Year");
                    return false;
                }

                let Max =13;
                let isbnValidation = $("#isbn").val();
                let charLength = isbnValidation.length;
                if(!isbnValidation){
                    window.alert("Isbn must be reuired");
                    return false;
                }if(charLength > Max) {
                    window.alert("Isbn must be 13 digit");
                    return false;
                }
                
                return true;
            })
        })
    </script>
</body>

</html>