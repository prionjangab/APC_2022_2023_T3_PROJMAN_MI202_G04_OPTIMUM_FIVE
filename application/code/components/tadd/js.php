<!-- JavaScript to show/hide option2 select based on option1 select value -->
            <script>
              document.getElementById("location").addEventListener("change", function() {
                var selectedValue = this.value;
                var option2Wrapper = document.getElementById("option2-wrapper");
                if (selectedValue === "On-Premise") {
                  option2Wrapper.style.display = "block";
                } else {
                  option2Wrapper.style.display = "none";
                }
              });
            </script>

              <!-- options for second select will be added dynamically using PHP -->
            <script>
              document.getElementById('floor').addEventListener('change', function() {
                var selectedValue = this.value;
                var optroom = document.getElementById("optroom");
                if (selectedValue === "") {
                  optroom.style.display = "none";
                  
                } else {
                  optroom.style.display = "block";
                }
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('room').innerHTML = this.responseText;
                    document.getElementById('room').style.display = 'block';
                  }
                };
                xhr.open('GET', 'code/components/tadd/pselect.php?selected_value=' + this.value, true);
                xhr.send();
              });
            </script>

            <script>
                // get the form element container
            var formElementContainer = document.getElementById("form-element-container");

            // listen for changes to the first select element
            var itype = document.getElementById("itype");
            itype.addEventListener("change", function() {
              // get the selected value
              var selectedValue = itype.value;

              // send an AJAX request to get the next form element based on the selected value
              var xhr = new XMLHttpRequest();
              xhr.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                  // update the form element container with the response
                  formElementContainer.innerHTML = this.responseText;
                }
              };
              xhr.open("GET", "code/components/tadd/itypeselect.php?selectedValue=" + selectedValue, true);
              xhr.send();
            });

            </script>

<script>
                // get the form element container
            var formElementContainer = document.getElementById("form-element-container");

            // listen for changes to the first select element
            var itype = document.getElementById("itype");
            itype.addEventListener("change", function() {
              // get the selected value
              var selectedValue = itype.value;

              // send an AJAX request to get the next form element based on the selected value
              var xhr = new XMLHttpRequest();
              xhr.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                  // update the form element container with the response
                  formElementContainer.innerHTML = this.responseText;
                }
              };
              xhr.open("GET", "code/components/tadd/itypeselect.php?selectedValue=" + selectedValue, true);
              xhr.send();
            });

            </script>

          

            