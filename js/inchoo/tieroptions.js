

        var groupOptionRowTemplate = '<tr>'
            + '<td style="display:none">'
            + '<select class=" input-text required-entry" name="product[group_option][{{index}}][website_id]" id="group_option_row_{{index}}_website">'
            + '<option value="0">所有网站 [USD]</option>'
            + '</select>'
            + '</td>'


            + '<td>'
            + '<input class=" input-text required-entry validate-zero-or-greater" type="text"  name="option1[{{index}}]" value="{{option}}" id="option1{{index}}" />'
            +'</td>'

            + '<td>'
            + '<input class=" input-text required-entry validate-zero-or-greater" type="text"   name="option2[{{index}}]" value="{{option}}" id="option2{{index}}" />'
            +'</td>'

            + '<td>'
            + '<input class=" input-text required-entry validate-zero-or-greater" type="text"   name="option3[{{index}}]" value="{{option}}" id="option3{{index}}" />'
            +'</td>'

            + '<td class="last"><input type="hidden" name="product[group_option][{{index}}][delete]" class="delete" value="" id="group_option_row_{{index}}_delete" />'
            + '<button title="Delete Group Option" type="button" class="scalable delete icon-btn delete-product-option" id="group_option_row_{{index}}_delete_button" onclick="return groupOptionControl.deleteItem(event);">'
            + '<span>Delete</span></button></td>'
            + '</tr>';

        var groupOptionControl = {
            template: new Template(groupOptionRowTemplate, new RegExp('(^|.|\\r|\\n)({{\\s*(\\w+)\\s*}})', '')),
            itemsCount: 0,
            total_amount:0,
            items_Count: 0,

            addItem : function () {

                var data = {
                    website_id: '0',
                    group: '32000',
                    price: '',
                    readOnly: false,
                    index: this.itemsCount++

                };


                if(arguments.length >= 3) {
                    data.website_id = arguments[0];
                    data.group = arguments[1];
                    data.price = arguments[2];
                }
                if (arguments.length == 4) {
                    data.readOnly = arguments[3];
                }

                Element.insert($('group_option_container'), {
                    bottom : this.template.evaluate(data)
                });

//                $('group_price_row_' + data.index + '_cust_group').value = data.group;
//                $('group_price_row_' + data.index + '_website').value    = data.website_id;
//
//
//                if (data.readOnly == '1') {
//                    ['website', 'cust_group', 'price', 'delete'].each(function(element_suffix) {
//                        $('group_price_row_' + data.index + '_' + element_suffix).disabled = true;
//                    });
//                    $('group_price_row_' + data.index + '_delete_button').hide();
//                }

                $('group_option_container').select('input', 'select').each(function(element) {
                    Event.observe(element, 'change', element.setHasChanges.bind(element));
                });
                editForm.getBalanceSelectFilter(--this.itemsCount);
                ++this.itemsCount;

            },
            disableElement: function(element) {
                element.disabled = true;
                element.addClassName('disabled');
            },
            deleteItem: function(event) {
                var tr = Event.findElement(event, 'tr');
                if (tr) {
                    Element.select(tr, '.delete').each(function(element) {
                        element.value='1';
                    });
                    Element.select(tr, ['input', 'select']).each(function(element) {
                        element.hide();
                        this.disableElement(element);
                        element.value = 0;
                    });
                    Element.hide(tr);
                    Element.addClassName(tr, 'no-display template');
                }
                return false;
            }
        };
