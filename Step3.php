<!--single form panel 3 -->
<div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
    <h3 class="multisteps-form__title" style="padding-left:18px;">ACADEMIC DETAILS</h3>
    <div class="multisteps-form__content">
        <!-- H.S.C. / Diploma (Equivalent) Details -->
        <h4 class="multisteps-form__title mt-4" style="padding-left:18px;">H.S.C. / Diploma (Equivalent) Details</h4>
        <div class="form-row mt-4">
            
            <div class="col-12 col-sm-6 px-1">
                <p>H.S.C. / Diploma (Equivalent) <sup style="color:#9194A0">*</sup></p>
                <div class="d-flex justify-content-between">
                    <div>
                        <input type="radio" id="hsc" name="hsc_diploma" value="H.S.C.">H.S.C.
                    </div>
                    <div>
                        <input type="radio" id="diploma" name="hsc_diploma" value="Diploma">
                        Diploma (Equivalent)
                    </div>
                </div>
                <small id="error-locality" class="text-danger"></small>
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>Exam Board</p>
                <input class="multisteps-form__input form-control" type="text" name="hsc_board" id="hsc_board" />
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>Passing Year</p>
                <input class="multisteps-form__input form-control" type="text" name="hsc_passing_year"
                    id="hsc_passing_year" />
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>Seat No</p>
                <input class="multisteps-form__input form-control" type="text" name="hsc_seat_no" id="hsc_seat_no" />
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>Percentage</p>
                <input class="multisteps-form__input form-control" type="number" name="hsc_percentage"
                    id="hsc_percentage" />
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>Marksheet (upload)</p>
                <input class="multisteps-form__input form-control" type="file" name="hsc_marksheet"
                    id="hsc_marksheet" />
            </div>
        </div>

        <!-- S.S.C. Details -->
        <h4 class="multisteps-form__title mt-4" style="padding-left:18px;">S.S.C. Details</h4>
        <div class="form-row mt-4 px-1">
            <div class="col-12 col-sm-6 mt-4">
                <p>Exam Board</p>
                <input class="multisteps-form__input form-control" type="text" name="ssc_board" id="ssc_board" />
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>Passing Year</p>
                <input class="multisteps-form__input form-control" type="text" name="ssc_passing_year"
                    id="ssc_passing_year" />
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>Seat No</p>
                <input class="multisteps-form__input form-control" type="text" name="ssc_seat_no" id="ssc_seat_no" />
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>Percentage</p>
                <input class="multisteps-form__input form-control" type="number" name="ssc_percentage"
                    id="ssc_percentage" />
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>Marksheet (upload)</p>
                <input class="multisteps-form__input form-control" type="file" name="ssc_marksheet"
                    id="ssc_marksheet" />
            </div>
        </div>

        <div class="button-row d-flex mt-4">
            <button class="btn btn-primary js-btn-prev" type="button" title="Prev"
                style="background: white;color: #0392ce;">Previous Step</button>
            <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
        </div>
    </div>
</div>