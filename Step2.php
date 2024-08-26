<div class="multisteps-form__panel shadow p-4 rounded bg-white " data-animation="scaleIn">
    <h3 class="multisteps-form__title" style="padding-left:18px;">Present Address Details
    </h3>
    <div class="multisteps-form__content">
        <div class="form-row mt-4">
            <div class="col-12 mt-4 px-1">
                <p>Address</p>
                <textarea class="multisteps-form__textarea form-control" name="present_address"
                    id="present_address"></textarea>
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>State</p>
                <input class="multisteps-form__input form-control" type="text" name="present_state"
                    id="present_state" />
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>District</p>
                <input class="multisteps-form__input form-control" type="text" name="present_district"
                    id="present_district" />
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>Taluka</p>
                <input class="multisteps-form__input form-control" type="text" name="present_taluka"
                    id="present_taluka" />
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>Pincode</p>
                <input class="multisteps-form__input form-control" type="number" name="present_pincode"
                    id="present_pincode" />
            </div>
        </div>

        <h3 class="multisteps-form__title mt-4" style="padding-left:18px;">Permanent Address
            Details</h3>
        <div class="form-row mt-4">
            <div class="col-12 mt-4 px-1">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="same_as_present" id="same_as_present">
                    <label class="form-check-label" for="same_as_present">
                        Is Permanent Address Same as Current Address?
                    </label>
                </div>
            </div>
            <div class="col-12 mt-4 px-1">
                <p>Address</p>
                <textarea class="multisteps-form__textarea form-control" name="permanent_address"
                    id="permanent_address"></textarea>
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>State</p>
                <input class="multisteps-form__input form-control" type="text" name="permanent_state"
                    id="permanent_state" />
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>District</p>
                <input class="multisteps-form__input form-control" type="text" name="permanent_district"
                    id="permanent_district" />
            </div>
            <div class="col-12 col-sm-6 mt-4 px-1">
                <p>Taluka</p>
                <input class="multisteps-form__input form-control" type="text" name="permanent_taluka"
                    id="permanent_taluka" />
            </div>
            <div class="col-12 col-sm-6 mt-4 px-10">
                <p>Pincode</p>
                <input class="multisteps-form__input form-control" type="number" name="permanent_pincode"
                    id="permanent_pincode" />
            </div>
        </div>

        <div class="button-row d-flex mt-4">
            <button class="btn btn-primary js-btn-prev" type="button" title="Prev"
                style="background: white;color: #0392ce;">
                Previous Step
            </button>
            <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next Step</button>
        </div>
    </div>
</div>