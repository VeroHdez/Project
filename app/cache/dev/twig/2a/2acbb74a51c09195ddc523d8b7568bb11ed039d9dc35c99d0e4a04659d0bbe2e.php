<?php

/* form_div_layout.html.twig */
class __TwigTemplate_13ab6bd6fdc7711cf116b0125f02cb06dc367cfee7e5c440b757f71f937e0a49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a43e26248f969d5b207f1f6109d0a92f6792a34a494382901593a3d9dc943bc4 = $this->env->getExtension("native_profiler");
        $__internal_a43e26248f969d5b207f1f6109d0a92f6792a34a494382901593a3d9dc943bc4->enter($__internal_a43e26248f969d5b207f1f6109d0a92f6792a34a494382901593a3d9dc943bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 88
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 92
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 96
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 109
        $this->displayBlock('date_widget', $context, $blocks);
        // line 123
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        $this->displayBlock('number_widget', $context, $blocks);
        // line 140
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 145
        $this->displayBlock('money_widget', $context, $blocks);
        // line 149
        $this->displayBlock('url_widget', $context, $blocks);
        // line 154
        $this->displayBlock('search_widget', $context, $blocks);
        // line 159
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 164
        $this->displayBlock('password_widget', $context, $blocks);
        // line 169
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 174
        $this->displayBlock('email_widget', $context, $blocks);
        // line 179
        $this->displayBlock('range_widget', $context, $blocks);
        // line 184
        $this->displayBlock('button_widget', $context, $blocks);
        // line 198
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 203
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 210
        $this->displayBlock('form_label', $context, $blocks);
        // line 232
        $this->displayBlock('button_label', $context, $blocks);
        // line 236
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 244
        $this->displayBlock('form_row', $context, $blocks);
        // line 252
        $this->displayBlock('button_row', $context, $blocks);
        // line 258
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 264
        $this->displayBlock('form', $context, $blocks);
        // line 270
        $this->displayBlock('form_start', $context, $blocks);
        // line 283
        $this->displayBlock('form_end', $context, $blocks);
        // line 290
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 294
        $this->displayBlock('form_errors', $context, $blocks);
        // line 304
        $this->displayBlock('form_rest', $context, $blocks);
        // line 311
        echo "
";
        // line 314
        $this->displayBlock('form_rows', $context, $blocks);
        // line 320
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 336
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 350
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 364
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_a43e26248f969d5b207f1f6109d0a92f6792a34a494382901593a3d9dc943bc4->leave($__internal_a43e26248f969d5b207f1f6109d0a92f6792a34a494382901593a3d9dc943bc4_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_7cb17d0aad6e481ab2d7eb64a48b192950d2a02efdad12c88103bc14cb775df8 = $this->env->getExtension("native_profiler");
        $__internal_7cb17d0aad6e481ab2d7eb64a48b192950d2a02efdad12c88103bc14cb775df8->enter($__internal_7cb17d0aad6e481ab2d7eb64a48b192950d2a02efdad12c88103bc14cb775df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_7cb17d0aad6e481ab2d7eb64a48b192950d2a02efdad12c88103bc14cb775df8->leave($__internal_7cb17d0aad6e481ab2d7eb64a48b192950d2a02efdad12c88103bc14cb775df8_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_30fb5b97e3345c3b3a3ff7162db91db9c58badb209aafdab87749bfd9d450321 = $this->env->getExtension("native_profiler");
        $__internal_30fb5b97e3345c3b3a3ff7162db91db9c58badb209aafdab87749bfd9d450321->enter($__internal_30fb5b97e3345c3b3a3ff7162db91db9c58badb209aafdab87749bfd9d450321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_30fb5b97e3345c3b3a3ff7162db91db9c58badb209aafdab87749bfd9d450321->leave($__internal_30fb5b97e3345c3b3a3ff7162db91db9c58badb209aafdab87749bfd9d450321_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_db4081e10751d71efe1027eacdf98862457a6bac17461c0d36733fb1acb9ed70 = $this->env->getExtension("native_profiler");
        $__internal_db4081e10751d71efe1027eacdf98862457a6bac17461c0d36733fb1acb9ed70->enter($__internal_db4081e10751d71efe1027eacdf98862457a6bac17461c0d36733fb1acb9ed70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_db4081e10751d71efe1027eacdf98862457a6bac17461c0d36733fb1acb9ed70->leave($__internal_db4081e10751d71efe1027eacdf98862457a6bac17461c0d36733fb1acb9ed70_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_eff062ab705e1fdbb77e57379fcfbe70607715a71e923f3d87bd1a649c7b2c1f = $this->env->getExtension("native_profiler");
        $__internal_eff062ab705e1fdbb77e57379fcfbe70607715a71e923f3d87bd1a649c7b2c1f->enter($__internal_eff062ab705e1fdbb77e57379fcfbe70607715a71e923f3d87bd1a649c7b2c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_eff062ab705e1fdbb77e57379fcfbe70607715a71e923f3d87bd1a649c7b2c1f->leave($__internal_eff062ab705e1fdbb77e57379fcfbe70607715a71e923f3d87bd1a649c7b2c1f_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_deb74fc69c13ed4d2c89af5de4cd8848f7c9d88e85d4ef4da228a6f83d4313d5 = $this->env->getExtension("native_profiler");
        $__internal_deb74fc69c13ed4d2c89af5de4cd8848f7c9d88e85d4ef4da228a6f83d4313d5->enter($__internal_deb74fc69c13ed4d2c89af5de4cd8848f7c9d88e85d4ef4da228a6f83d4313d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_deb74fc69c13ed4d2c89af5de4cd8848f7c9d88e85d4ef4da228a6f83d4313d5->leave($__internal_deb74fc69c13ed4d2c89af5de4cd8848f7c9d88e85d4ef4da228a6f83d4313d5_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_d21b2140d0ce43d644c7b8e89b055add3bb361da239157aa5ca479f6ce39bb29 = $this->env->getExtension("native_profiler");
        $__internal_d21b2140d0ce43d644c7b8e89b055add3bb361da239157aa5ca479f6ce39bb29->enter($__internal_d21b2140d0ce43d644c7b8e89b055add3bb361da239157aa5ca479f6ce39bb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_d21b2140d0ce43d644c7b8e89b055add3bb361da239157aa5ca479f6ce39bb29->leave($__internal_d21b2140d0ce43d644c7b8e89b055add3bb361da239157aa5ca479f6ce39bb29_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7e2ef9b4ce66a40c882dffbd5be59072d03f718159bcc7ee9c724729a6bbc860 = $this->env->getExtension("native_profiler");
        $__internal_7e2ef9b4ce66a40c882dffbd5be59072d03f718159bcc7ee9c724729a6bbc860->enter($__internal_7e2ef9b4ce66a40c882dffbd5be59072d03f718159bcc7ee9c724729a6bbc860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_7e2ef9b4ce66a40c882dffbd5be59072d03f718159bcc7ee9c724729a6bbc860->leave($__internal_7e2ef9b4ce66a40c882dffbd5be59072d03f718159bcc7ee9c724729a6bbc860_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d717e4df3ee08c16c499aa25fa694852353b2a7f5ec46e2795093f8411e7a1a7 = $this->env->getExtension("native_profiler");
        $__internal_d717e4df3ee08c16c499aa25fa694852353b2a7f5ec46e2795093f8411e7a1a7->enter($__internal_d717e4df3ee08c16c499aa25fa694852353b2a7f5ec46e2795093f8411e7a1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_d717e4df3ee08c16c499aa25fa694852353b2a7f5ec46e2795093f8411e7a1a7->leave($__internal_d717e4df3ee08c16c499aa25fa694852353b2a7f5ec46e2795093f8411e7a1a7_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_453f9dc88302aac70a6926d3d6ed6b2a161074b97e7033ef26abfaa7657b5651 = $this->env->getExtension("native_profiler");
        $__internal_453f9dc88302aac70a6926d3d6ed6b2a161074b97e7033ef26abfaa7657b5651->enter($__internal_453f9dc88302aac70a6926d3d6ed6b2a161074b97e7033ef26abfaa7657b5651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 83
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_453f9dc88302aac70a6926d3d6ed6b2a161074b97e7033ef26abfaa7657b5651->leave($__internal_453f9dc88302aac70a6926d3d6ed6b2a161074b97e7033ef26abfaa7657b5651_prof);

    }

    // line 88
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_884f57c8da4a2ade68e769977416a3a188d53f45db35f33bdff49ffc8d77bb83 = $this->env->getExtension("native_profiler");
        $__internal_884f57c8da4a2ade68e769977416a3a188d53f45db35f33bdff49ffc8d77bb83->enter($__internal_884f57c8da4a2ade68e769977416a3a188d53f45db35f33bdff49ffc8d77bb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 89
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_884f57c8da4a2ade68e769977416a3a188d53f45db35f33bdff49ffc8d77bb83->leave($__internal_884f57c8da4a2ade68e769977416a3a188d53f45db35f33bdff49ffc8d77bb83_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_415d408183599fa7b1f9fa520ff464e2fd20223e7641c738ae6fde8468d67679 = $this->env->getExtension("native_profiler");
        $__internal_415d408183599fa7b1f9fa520ff464e2fd20223e7641c738ae6fde8468d67679->enter($__internal_415d408183599fa7b1f9fa520ff464e2fd20223e7641c738ae6fde8468d67679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_415d408183599fa7b1f9fa520ff464e2fd20223e7641c738ae6fde8468d67679->leave($__internal_415d408183599fa7b1f9fa520ff464e2fd20223e7641c738ae6fde8468d67679_prof);

    }

    // line 96
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_a1ac436ae0aeaac7b31703d02275eeffd32ad7f75ebee26ef413acfe13c4748a = $this->env->getExtension("native_profiler");
        $__internal_a1ac436ae0aeaac7b31703d02275eeffd32ad7f75ebee26ef413acfe13c4748a->enter($__internal_a1ac436ae0aeaac7b31703d02275eeffd32ad7f75ebee26ef413acfe13c4748a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 97
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 98
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 105
            echo "</div>";
        }
        
        $__internal_a1ac436ae0aeaac7b31703d02275eeffd32ad7f75ebee26ef413acfe13c4748a->leave($__internal_a1ac436ae0aeaac7b31703d02275eeffd32ad7f75ebee26ef413acfe13c4748a_prof);

    }

    // line 109
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7cd72d876df80e3a65e77cd073aeb0ea3f9f6c866a0b13a5e79f612b067c6086 = $this->env->getExtension("native_profiler");
        $__internal_7cd72d876df80e3a65e77cd073aeb0ea3f9f6c866a0b13a5e79f612b067c6086->enter($__internal_7cd72d876df80e3a65e77cd073aeb0ea3f9f6c866a0b13a5e79f612b067c6086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 110
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 115
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 116
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 117
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 119
            echo "</div>";
        }
        
        $__internal_7cd72d876df80e3a65e77cd073aeb0ea3f9f6c866a0b13a5e79f612b067c6086->leave($__internal_7cd72d876df80e3a65e77cd073aeb0ea3f9f6c866a0b13a5e79f612b067c6086_prof);

    }

    // line 123
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_22863928110293ac4a54e7b5a37a652dec103b205ebe096eb960264258692a19 = $this->env->getExtension("native_profiler");
        $__internal_22863928110293ac4a54e7b5a37a652dec103b205ebe096eb960264258692a19->enter($__internal_22863928110293ac4a54e7b5a37a652dec103b205ebe096eb960264258692a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 124
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 125
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 127
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 128
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 130
            echo "        </div>";
        }
        
        $__internal_22863928110293ac4a54e7b5a37a652dec103b205ebe096eb960264258692a19->leave($__internal_22863928110293ac4a54e7b5a37a652dec103b205ebe096eb960264258692a19_prof);

    }

    // line 134
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_4cf393a5720f8bd28319724eceacce0aa6351485ac89ab734eeb1f29eb857bd9 = $this->env->getExtension("native_profiler");
        $__internal_4cf393a5720f8bd28319724eceacce0aa6351485ac89ab734eeb1f29eb857bd9->enter($__internal_4cf393a5720f8bd28319724eceacce0aa6351485ac89ab734eeb1f29eb857bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 136
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4cf393a5720f8bd28319724eceacce0aa6351485ac89ab734eeb1f29eb857bd9->leave($__internal_4cf393a5720f8bd28319724eceacce0aa6351485ac89ab734eeb1f29eb857bd9_prof);

    }

    // line 140
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_b832441fa4279bea2c25fd1b08fdec6f0792a52534c064cdc719f473bc49e8d9 = $this->env->getExtension("native_profiler");
        $__internal_b832441fa4279bea2c25fd1b08fdec6f0792a52534c064cdc719f473bc49e8d9->enter($__internal_b832441fa4279bea2c25fd1b08fdec6f0792a52534c064cdc719f473bc49e8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 141
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 142
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b832441fa4279bea2c25fd1b08fdec6f0792a52534c064cdc719f473bc49e8d9->leave($__internal_b832441fa4279bea2c25fd1b08fdec6f0792a52534c064cdc719f473bc49e8d9_prof);

    }

    // line 145
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_1b729f83e8164517396a458abcb53b6cefa03d3f93c2c69ada63465edc019898 = $this->env->getExtension("native_profiler");
        $__internal_1b729f83e8164517396a458abcb53b6cefa03d3f93c2c69ada63465edc019898->enter($__internal_1b729f83e8164517396a458abcb53b6cefa03d3f93c2c69ada63465edc019898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 146
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_1b729f83e8164517396a458abcb53b6cefa03d3f93c2c69ada63465edc019898->leave($__internal_1b729f83e8164517396a458abcb53b6cefa03d3f93c2c69ada63465edc019898_prof);

    }

    // line 149
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_bccd3fec60549e20f53d7fe285c0e0b0efb7d78e8fc266b8c8631dff670f6c2b = $this->env->getExtension("native_profiler");
        $__internal_bccd3fec60549e20f53d7fe285c0e0b0efb7d78e8fc266b8c8631dff670f6c2b->enter($__internal_bccd3fec60549e20f53d7fe285c0e0b0efb7d78e8fc266b8c8631dff670f6c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 150
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 151
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bccd3fec60549e20f53d7fe285c0e0b0efb7d78e8fc266b8c8631dff670f6c2b->leave($__internal_bccd3fec60549e20f53d7fe285c0e0b0efb7d78e8fc266b8c8631dff670f6c2b_prof);

    }

    // line 154
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_a959e1775e89fbb13c8e73611f5198ec29265e537a8ed23d1c37d84babeee4c1 = $this->env->getExtension("native_profiler");
        $__internal_a959e1775e89fbb13c8e73611f5198ec29265e537a8ed23d1c37d84babeee4c1->enter($__internal_a959e1775e89fbb13c8e73611f5198ec29265e537a8ed23d1c37d84babeee4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 155
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 156
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a959e1775e89fbb13c8e73611f5198ec29265e537a8ed23d1c37d84babeee4c1->leave($__internal_a959e1775e89fbb13c8e73611f5198ec29265e537a8ed23d1c37d84babeee4c1_prof);

    }

    // line 159
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a4b8df626c951190b97eacd29c929d9d7b32c7d7fab1e10e0a2ae387733bb9c8 = $this->env->getExtension("native_profiler");
        $__internal_a4b8df626c951190b97eacd29c929d9d7b32c7d7fab1e10e0a2ae387733bb9c8->enter($__internal_a4b8df626c951190b97eacd29c929d9d7b32c7d7fab1e10e0a2ae387733bb9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 160
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 161
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_a4b8df626c951190b97eacd29c929d9d7b32c7d7fab1e10e0a2ae387733bb9c8->leave($__internal_a4b8df626c951190b97eacd29c929d9d7b32c7d7fab1e10e0a2ae387733bb9c8_prof);

    }

    // line 164
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_4caa60bbb2aa32b66e5827ab323f05fb5f6ebda5db99a1be6a5388c1d41ac591 = $this->env->getExtension("native_profiler");
        $__internal_4caa60bbb2aa32b66e5827ab323f05fb5f6ebda5db99a1be6a5388c1d41ac591->enter($__internal_4caa60bbb2aa32b66e5827ab323f05fb5f6ebda5db99a1be6a5388c1d41ac591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4caa60bbb2aa32b66e5827ab323f05fb5f6ebda5db99a1be6a5388c1d41ac591->leave($__internal_4caa60bbb2aa32b66e5827ab323f05fb5f6ebda5db99a1be6a5388c1d41ac591_prof);

    }

    // line 169
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_e6934df988d527598e5eeab8b7dac22f4afefb4d6e6210a7ba055d5c43c62035 = $this->env->getExtension("native_profiler");
        $__internal_e6934df988d527598e5eeab8b7dac22f4afefb4d6e6210a7ba055d5c43c62035->enter($__internal_e6934df988d527598e5eeab8b7dac22f4afefb4d6e6210a7ba055d5c43c62035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e6934df988d527598e5eeab8b7dac22f4afefb4d6e6210a7ba055d5c43c62035->leave($__internal_e6934df988d527598e5eeab8b7dac22f4afefb4d6e6210a7ba055d5c43c62035_prof);

    }

    // line 174
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_255e5acbe8e085cb65d9620e337a622e22826d982b9370aa46d9f8a75bedd6a0 = $this->env->getExtension("native_profiler");
        $__internal_255e5acbe8e085cb65d9620e337a622e22826d982b9370aa46d9f8a75bedd6a0->enter($__internal_255e5acbe8e085cb65d9620e337a622e22826d982b9370aa46d9f8a75bedd6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_255e5acbe8e085cb65d9620e337a622e22826d982b9370aa46d9f8a75bedd6a0->leave($__internal_255e5acbe8e085cb65d9620e337a622e22826d982b9370aa46d9f8a75bedd6a0_prof);

    }

    // line 179
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_cfb509906dcc280b3477163e138b993ba9367b5703070feb478170f2b64bf81d = $this->env->getExtension("native_profiler");
        $__internal_cfb509906dcc280b3477163e138b993ba9367b5703070feb478170f2b64bf81d->enter($__internal_cfb509906dcc280b3477163e138b993ba9367b5703070feb478170f2b64bf81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 180
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "range")) : ("range"));
        // line 181
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cfb509906dcc280b3477163e138b993ba9367b5703070feb478170f2b64bf81d->leave($__internal_cfb509906dcc280b3477163e138b993ba9367b5703070feb478170f2b64bf81d_prof);

    }

    // line 184
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_5884650f43092da65cf53c70211a947ef4651e76f48176f1adcb50b8550d082e = $this->env->getExtension("native_profiler");
        $__internal_5884650f43092da65cf53c70211a947ef4651e76f48176f1adcb50b8550d082e->enter($__internal_5884650f43092da65cf53c70211a947ef4651e76f48176f1adcb50b8550d082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 185
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 186
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 187
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 188
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 189
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 192
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 195
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_5884650f43092da65cf53c70211a947ef4651e76f48176f1adcb50b8550d082e->leave($__internal_5884650f43092da65cf53c70211a947ef4651e76f48176f1adcb50b8550d082e_prof);

    }

    // line 198
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_a7c393268e51059479cf6f7e826601b6ed3624b90eeebe8ad254e6b7ebf17247 = $this->env->getExtension("native_profiler");
        $__internal_a7c393268e51059479cf6f7e826601b6ed3624b90eeebe8ad254e6b7ebf17247->enter($__internal_a7c393268e51059479cf6f7e826601b6ed3624b90eeebe8ad254e6b7ebf17247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 200
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_a7c393268e51059479cf6f7e826601b6ed3624b90eeebe8ad254e6b7ebf17247->leave($__internal_a7c393268e51059479cf6f7e826601b6ed3624b90eeebe8ad254e6b7ebf17247_prof);

    }

    // line 203
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_e9a18c0371fdb2ebf96fb7c5ce067be73e304d466d3dcdc1d4e611f7be431104 = $this->env->getExtension("native_profiler");
        $__internal_e9a18c0371fdb2ebf96fb7c5ce067be73e304d466d3dcdc1d4e611f7be431104->enter($__internal_e9a18c0371fdb2ebf96fb7c5ce067be73e304d466d3dcdc1d4e611f7be431104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 205
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_e9a18c0371fdb2ebf96fb7c5ce067be73e304d466d3dcdc1d4e611f7be431104->leave($__internal_e9a18c0371fdb2ebf96fb7c5ce067be73e304d466d3dcdc1d4e611f7be431104_prof);

    }

    // line 210
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e75c28609608be097838a2ea360df44003944ddfc074df6314754dd6e3f93665 = $this->env->getExtension("native_profiler");
        $__internal_e75c28609608be097838a2ea360df44003944ddfc074df6314754dd6e3f93665->enter($__internal_e75c28609608be097838a2ea360df44003944ddfc074df6314754dd6e3f93665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 211
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 212
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 213
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 215
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 216
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 218
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 219
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 220
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 221
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 222
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 225
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 228
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_e75c28609608be097838a2ea360df44003944ddfc074df6314754dd6e3f93665->leave($__internal_e75c28609608be097838a2ea360df44003944ddfc074df6314754dd6e3f93665_prof);

    }

    // line 232
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_afc686814553a3be1647300d2762f0e22ad32800ee91dbd0c45bb248d438f4a8 = $this->env->getExtension("native_profiler");
        $__internal_afc686814553a3be1647300d2762f0e22ad32800ee91dbd0c45bb248d438f4a8->enter($__internal_afc686814553a3be1647300d2762f0e22ad32800ee91dbd0c45bb248d438f4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_afc686814553a3be1647300d2762f0e22ad32800ee91dbd0c45bb248d438f4a8->leave($__internal_afc686814553a3be1647300d2762f0e22ad32800ee91dbd0c45bb248d438f4a8_prof);

    }

    // line 236
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_4e228b6675af155d0e9a1d119c2c1f5e79fabd63ae2b382c83c1d7538b37e23c = $this->env->getExtension("native_profiler");
        $__internal_4e228b6675af155d0e9a1d119c2c1f5e79fabd63ae2b382c83c1d7538b37e23c->enter($__internal_4e228b6675af155d0e9a1d119c2c1f5e79fabd63ae2b382c83c1d7538b37e23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 241
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_4e228b6675af155d0e9a1d119c2c1f5e79fabd63ae2b382c83c1d7538b37e23c->leave($__internal_4e228b6675af155d0e9a1d119c2c1f5e79fabd63ae2b382c83c1d7538b37e23c_prof);

    }

    // line 244
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_30eddddfe39c60d8eb99d82a89436cc791e9118e3b9d7e15ac4982cbb796ca48 = $this->env->getExtension("native_profiler");
        $__internal_30eddddfe39c60d8eb99d82a89436cc791e9118e3b9d7e15ac4982cbb796ca48->enter($__internal_30eddddfe39c60d8eb99d82a89436cc791e9118e3b9d7e15ac4982cbb796ca48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 245
        echo "<div>";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 249
        echo "</div>";
        
        $__internal_30eddddfe39c60d8eb99d82a89436cc791e9118e3b9d7e15ac4982cbb796ca48->leave($__internal_30eddddfe39c60d8eb99d82a89436cc791e9118e3b9d7e15ac4982cbb796ca48_prof);

    }

    // line 252
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_58147546a35b27fc570c2e6a1e71a26f87fd237bf145123d39c06b9d875363d4 = $this->env->getExtension("native_profiler");
        $__internal_58147546a35b27fc570c2e6a1e71a26f87fd237bf145123d39c06b9d875363d4->enter($__internal_58147546a35b27fc570c2e6a1e71a26f87fd237bf145123d39c06b9d875363d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 253
        echo "<div>";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 255
        echo "</div>";
        
        $__internal_58147546a35b27fc570c2e6a1e71a26f87fd237bf145123d39c06b9d875363d4->leave($__internal_58147546a35b27fc570c2e6a1e71a26f87fd237bf145123d39c06b9d875363d4_prof);

    }

    // line 258
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_72160aaa0adda2f3b98e6a354362a47fb85db2715636afb473eae59f2ed2cf36 = $this->env->getExtension("native_profiler");
        $__internal_72160aaa0adda2f3b98e6a354362a47fb85db2715636afb473eae59f2ed2cf36->enter($__internal_72160aaa0adda2f3b98e6a354362a47fb85db2715636afb473eae59f2ed2cf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 259
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_72160aaa0adda2f3b98e6a354362a47fb85db2715636afb473eae59f2ed2cf36->leave($__internal_72160aaa0adda2f3b98e6a354362a47fb85db2715636afb473eae59f2ed2cf36_prof);

    }

    // line 264
    public function block_form($context, array $blocks = array())
    {
        $__internal_591455a5046314a766cfe04ef11e2e12cd635d92716054b80686490674adc58a = $this->env->getExtension("native_profiler");
        $__internal_591455a5046314a766cfe04ef11e2e12cd635d92716054b80686490674adc58a->enter($__internal_591455a5046314a766cfe04ef11e2e12cd635d92716054b80686490674adc58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 265
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 266
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_591455a5046314a766cfe04ef11e2e12cd635d92716054b80686490674adc58a->leave($__internal_591455a5046314a766cfe04ef11e2e12cd635d92716054b80686490674adc58a_prof);

    }

    // line 270
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_fa4fab5596a1accd23038fda4296ee0e3edae8e79aae91d4e864fca943714547 = $this->env->getExtension("native_profiler");
        $__internal_fa4fab5596a1accd23038fda4296ee0e3edae8e79aae91d4e864fca943714547->enter($__internal_fa4fab5596a1accd23038fda4296ee0e3edae8e79aae91d4e864fca943714547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 271
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 272
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 273
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 275
            $context["form_method"] = "POST";
        }
        // line 277
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 278
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 279
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_fa4fab5596a1accd23038fda4296ee0e3edae8e79aae91d4e864fca943714547->leave($__internal_fa4fab5596a1accd23038fda4296ee0e3edae8e79aae91d4e864fca943714547_prof);

    }

    // line 283
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_bbcd1d440e59fe88f047155e7d849d96c1b1ed566fb1f1cd5e8d521076a72e95 = $this->env->getExtension("native_profiler");
        $__internal_bbcd1d440e59fe88f047155e7d849d96c1b1ed566fb1f1cd5e8d521076a72e95->enter($__internal_bbcd1d440e59fe88f047155e7d849d96c1b1ed566fb1f1cd5e8d521076a72e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 284
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 285
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 287
        echo "</form>";
        
        $__internal_bbcd1d440e59fe88f047155e7d849d96c1b1ed566fb1f1cd5e8d521076a72e95->leave($__internal_bbcd1d440e59fe88f047155e7d849d96c1b1ed566fb1f1cd5e8d521076a72e95_prof);

    }

    // line 290
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_144f8de23aaa6e451c2649d2714557496a3ff17256c713ec05ce0db9bb7586c7 = $this->env->getExtension("native_profiler");
        $__internal_144f8de23aaa6e451c2649d2714557496a3ff17256c713ec05ce0db9bb7586c7->enter($__internal_144f8de23aaa6e451c2649d2714557496a3ff17256c713ec05ce0db9bb7586c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 291
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_144f8de23aaa6e451c2649d2714557496a3ff17256c713ec05ce0db9bb7586c7->leave($__internal_144f8de23aaa6e451c2649d2714557496a3ff17256c713ec05ce0db9bb7586c7_prof);

    }

    // line 294
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6defac847d802855f9c969d186514c2de07ab6311d49f157e9d1d8ddabe70729 = $this->env->getExtension("native_profiler");
        $__internal_6defac847d802855f9c969d186514c2de07ab6311d49f157e9d1d8ddabe70729->enter($__internal_6defac847d802855f9c969d186514c2de07ab6311d49f157e9d1d8ddabe70729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 295
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 296
            echo "<ul>";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 298
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 300
            echo "</ul>";
        }
        
        $__internal_6defac847d802855f9c969d186514c2de07ab6311d49f157e9d1d8ddabe70729->leave($__internal_6defac847d802855f9c969d186514c2de07ab6311d49f157e9d1d8ddabe70729_prof);

    }

    // line 304
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_7a019e73eb379237afa359a865f76bb58d06be394c207d2e27b35d668f849ae5 = $this->env->getExtension("native_profiler");
        $__internal_7a019e73eb379237afa359a865f76bb58d06be394c207d2e27b35d668f849ae5->enter($__internal_7a019e73eb379237afa359a865f76bb58d06be394c207d2e27b35d668f849ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 306
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 307
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7a019e73eb379237afa359a865f76bb58d06be394c207d2e27b35d668f849ae5->leave($__internal_7a019e73eb379237afa359a865f76bb58d06be394c207d2e27b35d668f849ae5_prof);

    }

    // line 314
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_aa6ccbef475c7bd2cdce4f2db8e120b62084467cdcf3846fb2c220f9b9158107 = $this->env->getExtension("native_profiler");
        $__internal_aa6ccbef475c7bd2cdce4f2db8e120b62084467cdcf3846fb2c220f9b9158107->enter($__internal_aa6ccbef475c7bd2cdce4f2db8e120b62084467cdcf3846fb2c220f9b9158107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 316
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_aa6ccbef475c7bd2cdce4f2db8e120b62084467cdcf3846fb2c220f9b9158107->leave($__internal_aa6ccbef475c7bd2cdce4f2db8e120b62084467cdcf3846fb2c220f9b9158107_prof);

    }

    // line 320
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_8e07a37d51b737f402048cbb6ec69f9e1a2d14ef4ac58c17e64c6515b94d1c8b = $this->env->getExtension("native_profiler");
        $__internal_8e07a37d51b737f402048cbb6ec69f9e1a2d14ef4ac58c17e64c6515b94d1c8b->enter($__internal_8e07a37d51b737f402048cbb6ec69f9e1a2d14ef4ac58c17e64c6515b94d1c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 321
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 322
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 323
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 325
            echo " ";
            // line 326
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 327
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 328
$context["attrvalue"] === true)) {
                // line 329
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 330
$context["attrvalue"] === false)) {
                // line 331
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8e07a37d51b737f402048cbb6ec69f9e1a2d14ef4ac58c17e64c6515b94d1c8b->leave($__internal_8e07a37d51b737f402048cbb6ec69f9e1a2d14ef4ac58c17e64c6515b94d1c8b_prof);

    }

    // line 336
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_f116c7f9e4592e4bb47700de4671a3f220884c02b34235e77765436b055d6b7e = $this->env->getExtension("native_profiler");
        $__internal_f116c7f9e4592e4bb47700de4671a3f220884c02b34235e77765436b055d6b7e->enter($__internal_f116c7f9e4592e4bb47700de4671a3f220884c02b34235e77765436b055d6b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 337
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 339
            echo " ";
            // line 340
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 341
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 342
$context["attrvalue"] === true)) {
                // line 343
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 344
$context["attrvalue"] === false)) {
                // line 345
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f116c7f9e4592e4bb47700de4671a3f220884c02b34235e77765436b055d6b7e->leave($__internal_f116c7f9e4592e4bb47700de4671a3f220884c02b34235e77765436b055d6b7e_prof);

    }

    // line 350
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_80b45ec8776e601330a38b77f9b5509521486fa7255cbcc595e39cbb5bb743bf = $this->env->getExtension("native_profiler");
        $__internal_80b45ec8776e601330a38b77f9b5509521486fa7255cbcc595e39cbb5bb743bf->enter($__internal_80b45ec8776e601330a38b77f9b5509521486fa7255cbcc595e39cbb5bb743bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 351
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 353
            echo " ";
            // line 354
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 356
$context["attrvalue"] === true)) {
                // line 357
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 358
$context["attrvalue"] === false)) {
                // line 359
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_80b45ec8776e601330a38b77f9b5509521486fa7255cbcc595e39cbb5bb743bf->leave($__internal_80b45ec8776e601330a38b77f9b5509521486fa7255cbcc595e39cbb5bb743bf_prof);

    }

    // line 364
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_3b96014d07153ceb527a85e1b2c06d9856cb7f080d4119498d6758caf1e68f08 = $this->env->getExtension("native_profiler");
        $__internal_3b96014d07153ceb527a85e1b2c06d9856cb7f080d4119498d6758caf1e68f08->enter($__internal_3b96014d07153ceb527a85e1b2c06d9856cb7f080d4119498d6758caf1e68f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 366
            echo " ";
            // line 367
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 369
$context["attrvalue"] === true)) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 371
$context["attrvalue"] === false)) {
                // line 372
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3b96014d07153ceb527a85e1b2c06d9856cb7f080d4119498d6758caf1e68f08->leave($__internal_3b96014d07153ceb527a85e1b2c06d9856cb7f080d4119498d6758caf1e68f08_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1284 => 372,  1282 => 371,  1277 => 370,  1275 => 369,  1270 => 368,  1268 => 367,  1266 => 366,  1262 => 365,  1256 => 364,  1241 => 359,  1239 => 358,  1234 => 357,  1232 => 356,  1227 => 355,  1225 => 354,  1223 => 353,  1219 => 352,  1210 => 351,  1204 => 350,  1189 => 345,  1187 => 344,  1182 => 343,  1180 => 342,  1175 => 341,  1173 => 340,  1171 => 339,  1167 => 338,  1161 => 337,  1155 => 336,  1140 => 331,  1138 => 330,  1133 => 329,  1131 => 328,  1126 => 327,  1124 => 326,  1122 => 325,  1118 => 324,  1114 => 323,  1110 => 322,  1104 => 321,  1098 => 320,  1087 => 316,  1083 => 315,  1077 => 314,  1065 => 307,  1063 => 306,  1059 => 305,  1053 => 304,  1045 => 300,  1037 => 298,  1033 => 297,  1031 => 296,  1029 => 295,  1023 => 294,  1014 => 291,  1008 => 290,  1001 => 287,  998 => 285,  996 => 284,  990 => 283,  980 => 279,  978 => 278,  951 => 277,  948 => 275,  945 => 273,  943 => 272,  941 => 271,  935 => 270,  928 => 267,  926 => 266,  924 => 265,  918 => 264,  911 => 259,  905 => 258,  898 => 255,  896 => 254,  894 => 253,  888 => 252,  881 => 249,  879 => 248,  877 => 247,  875 => 246,  873 => 245,  867 => 244,  860 => 241,  854 => 236,  843 => 232,  820 => 228,  816 => 225,  813 => 222,  812 => 221,  811 => 220,  809 => 219,  807 => 218,  804 => 216,  802 => 215,  799 => 213,  797 => 212,  795 => 211,  789 => 210,  782 => 205,  780 => 204,  774 => 203,  767 => 200,  765 => 199,  759 => 198,  746 => 195,  742 => 192,  739 => 189,  738 => 188,  737 => 187,  735 => 186,  733 => 185,  727 => 184,  720 => 181,  718 => 180,  712 => 179,  705 => 176,  703 => 175,  697 => 174,  690 => 171,  688 => 170,  682 => 169,  675 => 166,  673 => 165,  667 => 164,  659 => 161,  657 => 160,  651 => 159,  644 => 156,  642 => 155,  636 => 154,  629 => 151,  627 => 150,  621 => 149,  614 => 146,  608 => 145,  601 => 142,  599 => 141,  593 => 140,  586 => 137,  584 => 136,  578 => 134,  570 => 130,  560 => 129,  555 => 128,  553 => 127,  550 => 125,  548 => 124,  542 => 123,  534 => 119,  532 => 117,  531 => 116,  530 => 115,  529 => 114,  525 => 113,  522 => 111,  520 => 110,  514 => 109,  506 => 105,  504 => 104,  502 => 103,  500 => 102,  498 => 101,  494 => 100,  491 => 98,  489 => 97,  483 => 96,  466 => 93,  460 => 92,  443 => 89,  437 => 88,  408 => 83,  406 => 82,  403 => 80,  401 => 79,  399 => 78,  394 => 77,  392 => 76,  375 => 75,  369 => 74,  362 => 71,  360 => 70,  358 => 69,  352 => 66,  350 => 65,  348 => 64,  346 => 63,  344 => 62,  335 => 60,  333 => 59,  326 => 58,  323 => 56,  321 => 55,  315 => 54,  308 => 51,  302 => 49,  300 => 48,  296 => 47,  292 => 46,  286 => 45,  278 => 41,  275 => 39,  273 => 38,  267 => 37,  256 => 34,  250 => 33,  243 => 30,  240 => 28,  238 => 27,  232 => 26,  225 => 23,  223 => 22,  221 => 21,  218 => 19,  216 => 18,  212 => 17,  206 => 16,  189 => 13,  187 => 12,  181 => 11,  173 => 7,  170 => 5,  168 => 4,  162 => 3,  155 => 364,  153 => 350,  151 => 336,  149 => 320,  147 => 314,  144 => 311,  142 => 304,  140 => 294,  138 => 290,  136 => 283,  134 => 270,  132 => 264,  130 => 258,  128 => 252,  126 => 244,  124 => 236,  122 => 232,  120 => 210,  118 => 203,  116 => 198,  114 => 184,  112 => 179,  110 => 174,  108 => 169,  106 => 164,  104 => 159,  102 => 154,  100 => 149,  98 => 145,  96 => 140,  94 => 134,  92 => 123,  90 => 109,  88 => 96,  86 => 92,  84 => 88,  82 => 74,  80 => 54,  78 => 45,  76 => 37,  74 => 33,  72 => 26,  70 => 16,  68 => 11,  66 => 3,);
    }
}
/* {# Widgets #}*/
/* */
/* {%- block form_widget -%}*/
/*     {% if compound %}*/
/*         {{- block('form_widget_compound') -}}*/
/*     {% else %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% endif %}*/
/* {%- endblock form_widget -%}*/
/* */
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {%- endblock form_widget_simple -%}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {%- if form.parent is empty -%}*/
/*             {{ form_errors(form) }}*/
/*         {%- endif -%}*/
/*         {{- block('form_rows') -}}*/
/*         {{- form_rest(form) -}}*/
/*     </div>*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {%- block collection_widget -%}*/
/*     {% if prototype is defined %}*/
/*         {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}*/
/*     {% endif %}*/
/*     {{- block('form_widget') -}}*/
/* {%- endblock collection_widget -%}*/
/* */
/* {%- block textarea_widget -%}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* {%- endblock textarea_widget -%}*/
/* */
/* {%- block choice_widget -%}*/
/*     {% if expanded %}*/
/*         {{- block('choice_widget_expanded') -}}*/
/*     {% else %}*/
/*         {{- block('choice_widget_collapsed') -}}*/
/*     {% endif %}*/
/* {%- endblock choice_widget -%}*/
/* */
/* {%- block choice_widget_expanded -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*     {%- for child in form %}*/
/*         {{- form_widget(child) -}}*/
/*         {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}*/
/*     {% endfor -%}*/
/*     </div>*/
/* {%- endblock choice_widget_expanded -%}*/
/* */
/* {%- block choice_widget_collapsed -%}*/
/*     {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {%- if placeholder is not none -%}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>*/
/*         {%- endif -%}*/
/*         {%- if preferred_choices|length > 0 -%}*/
/*             {% set options = preferred_choices %}*/
/*             {{- block('choice_widget_options') -}}*/
/*             {%- if choices|length > 0 and separator is not none -%}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         {%- set options = choices -%}*/
/*         {{- block('choice_widget_options') -}}*/
/*     </select>*/
/* {%- endblock choice_widget_collapsed -%}*/
/* */
/* {%- block choice_widget_options -%}*/
/*     {% for group_label, choice in options %}*/
/*         {%- if choice is iterable -%}*/
/*             <optgroup label="{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}">*/
/*                 {% set options = choice %}*/
/*                 {{- block('choice_widget_options') -}}*/
/*             </optgroup>*/
/*         {%- else -%}*/
/*             {% set attr = choice.attr %}*/
/*             <option value="{{ choice.value }}" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected="selected"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>*/
/*         {%- endif -%}*/
/*     {% endfor %}*/
/* {%- endblock choice_widget_options -%}*/
/* */
/* {%- block checkbox_widget -%}*/
/*     <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock checkbox_widget -%}*/
/* */
/* {%- block radio_widget -%}*/
/*     <input type="radio" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock radio_widget -%}*/
/* */
/* {%- block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date) -}}*/
/*             {{- form_widget(form.time) -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock datetime_widget -%}*/
/* */
/* {%- block date_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*             })|raw -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock date_widget -%}*/
/* */
/* {%- block time_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock time_widget -%}*/
/* */
/* {%- block number_widget -%}*/
/*     {# type="number" doesn't work with floats #}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock number_widget -%}*/
/* */
/* {%- block integer_widget -%}*/
/*     {%- set type = type|default('number') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock integer_widget -%}*/
/* */
/* {%- block money_widget -%}*/
/*     {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}*/
/* {%- endblock money_widget -%}*/
/* */
/* {%- block url_widget -%}*/
/*     {%- set type = type|default('url') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock url_widget -%}*/
/* */
/* {%- block search_widget -%}*/
/*     {%- set type = type|default('search') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock search_widget -%}*/
/* */
/* {%- block percent_widget -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }} %*/
/* {%- endblock percent_widget -%}*/
/* */
/* {%- block password_widget -%}*/
/*     {%- set type = type|default('password') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock password_widget -%}*/
/* */
/* {%- block hidden_widget -%}*/
/*     {%- set type = type|default('hidden') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock hidden_widget -%}*/
/* */
/* {%- block email_widget -%}*/
/*     {%- set type = type|default('email') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock email_widget -%}*/
/* */
/* {%- block range_widget -%}*/
/*     {% set type = type|default('range') %}*/
/*     {{- block('form_widget_simple') -}}*/
/* {%- endblock range_widget %}*/
/* */
/* {%- block button_widget -%}*/
/*     {%- if label is empty -%}*/
/*         {%- if label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*                 '%name%': name,*/
/*                 '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {%- endif -%}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>*/
/* {%- endblock button_widget -%}*/
/* */
/* {%- block submit_widget -%}*/
/*     {%- set type = type|default('submit') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock submit_widget -%}*/
/* */
/* {%- block reset_widget -%}*/
/*     {%- set type = type|default('reset') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock reset_widget -%}*/
/* */
/* {# Labels #}*/
/* */
/* {%- block form_label -%}*/
/*     {% if label is not same as(false) -%}*/
/*         {% if not compound -%}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {%- endif -%}*/
/*         {% if required -%}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {%- endif -%}*/
/*         {% if label is empty -%}*/
/*             {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>*/
/*     {%- endif -%}*/
/* {%- endblock form_label -%}*/
/* */
/* {%- block button_label -%}{%- endblock -%}*/
/* */
/* {# Rows #}*/
/* */
/* {%- block repeated_row -%}*/
/*     {#*/
/*     No need to render the errors here, as all errors are mapped*/
/*     to the first child (see RepeatedTypeValidatorExtension).*/
/*     #}*/
/*     {{- block('form_rows') -}}*/
/* {%- endblock repeated_row -%}*/
/* */
/* {%- block form_row -%}*/
/*     <div>*/
/*         {{- form_label(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock form_row -%}*/
/* */
/* {%- block button_row -%}*/
/*     <div>*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row -%}*/
/* */
/* {%- block hidden_row -%}*/
/*     {{ form_widget(form) }}*/
/* {%- endblock hidden_row -%}*/
/* */
/* {# Misc #}*/
/* */
/* {%- block form -%}*/
/*     {{ form_start(form) }}*/
/*         {{- form_widget(form) -}}*/
/*     {{ form_end(form) }}*/
/* {%- endblock form -%}*/
/* */
/* {%- block form_start -%}*/
/*     {% set method = method|upper %}*/
/*     {%- if method in ["GET", "POST"] -%}*/
/*         {% set form_method = method %}*/
/*     {%- else -%}*/
/*         {% set form_method = "POST" %}*/
/*     {%- endif -%}*/
/*     <form name="{{ name }}" method="{{ form_method|lower }}"{% if action != '' %} action="{{ action }}"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {%- if form_method != method -%}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {%- endif -%}*/
/* {%- endblock form_start -%}*/
/* */
/* {%- block form_end -%}*/
/*     {%- if not render_rest is defined or render_rest -%}*/
/*         {{ form_rest(form) }}*/
/*     {%- endif -%}*/
/*     </form>*/
/* {%- endblock form_end -%}*/
/* */
/* {%- block form_enctype -%}*/
/*     {% if multipart %}enctype="multipart/form-data"{% endif %}*/
/* {%- endblock form_enctype -%}*/
/* */
/* {%- block form_errors -%}*/
/*     {%- if errors|length > 0 -%}*/
/*     <ul>*/
/*         {%- for error in errors -%}*/
/*             <li>{{ error.message }}</li>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/*     {%- endif -%}*/
/* {%- endblock form_errors -%}*/
/* */
/* {%- block form_rest -%}*/
/*     {% for child in form -%}*/
/*         {% if not child.rendered %}*/
/*             {{- form_row(child) -}}*/
/*         {% endif %}*/
/*     {%- endfor %}*/
/* {% endblock form_rest %}*/
/* */
/* {# Support #}*/
/* */
/* {%- block form_rows -%}*/
/*     {% for child in form %}*/
/*         {{- form_row(child) -}}*/
/*     {% endfor %}*/
/* {%- endblock form_rows -%}*/
/* */
/* {%- block widget_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"*/
/*     {%- if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- if required %} required="required"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_attributes -%}*/
/* */
/* {%- block widget_container_attributes -%}*/
/*     {%- if id is not empty %}id="{{ id }}"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_container_attributes -%}*/
/* */
/* {%- block button_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"{% if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock button_attributes -%}*/
/* */
/* {% block attributes -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock attributes -%}*/
/* */
