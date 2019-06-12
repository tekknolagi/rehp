<?hh
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * Js_of_ocaml__Regexp.php
 */

namespace Rehack;

final class Js_of_ocaml__Regexp {
  <<__Memoize>>
  public static function get() {
    $global_object = \Rehack\GlobalObject::get();
    $runtime = \Rehack\Runtime::get();
    /*
     * Soon, these will replace the `global_data->ModuleName`
     * pattern in the load() function.
     */
    $Js_of_ocaml__Js = Js_of_ocaml__Js::get();
    $Pervasives = Pervasives::get();
    $Assert_failure = Assert_failure::get();
    Js_of_ocaml__Regexp::load($global_object);
    $memoized = $runtime->caml_get_global_data()->Js_of_ocaml__Regexp;
    return $memoized;
  }

  /**
   * Performs module load operation. May have side effects.
   */
  private static function load($joo_global_object) {
    

    $runtime = $joo_global_object->jsoo_runtime;
    $call1 = $runtime["caml_call1"];
    $call2 = $runtime["caml_call2"];
    $caml_get_public_method = $runtime["caml_get_public_method"];
    $caml_js_to_byte_string = $runtime["caml_js_to_byte_string"];
    $caml_jsbytes_of_string = $runtime["caml_jsbytes_of_string"];
    $caml_new_string = $runtime["caml_new_string"];
    $global_data = $runtime["caml_get_global_data"]();
    $cst_g = $caml_new_string("g");
    $cst = $caml_new_string("[\\][()\\\\|+*.?{}^\\$]");
    $Js_of_ocaml_Js = $global_data["Js_of_ocaml__Js"];
    $Assert_failure = $global_data["Assert_failure"];
    $Pervasives = $global_data["Pervasives"];
    $am = Vector{0, $caml_new_string("lib/js_of_ocaml/regexp.ml"), 33, 64};
    $regexp = function(dynamic $s) use ($Js_of_ocaml_Js,$caml_jsbytes_of_string) {
      $bm = 0;
      $bn = "g";
      $bo = $caml_jsbytes_of_string($s);
      $bp = $Js_of_ocaml_Js[11];
      return (function(dynamic $t2, dynamic $t0, dynamic $t1, dynamic $param) {return new $t2($t0, $t1);
       })($bp, $bo, $bn, $bm);
    };
    $regexp_case_fold = function(dynamic $s) use ($Js_of_ocaml_Js,$caml_jsbytes_of_string) {
      $bi = 0;
      $bj = "gi";
      $bk = $caml_jsbytes_of_string($s);
      $bl = $Js_of_ocaml_Js[11];
      return (function(dynamic $t5, dynamic $t3, dynamic $t4, dynamic $param) {return new $t5($t3, $t4);
       })($bl, $bk, $bj, $bi);
    };
    $regexp_with_flag = function(dynamic $s, dynamic $f) use ($Js_of_ocaml_Js,$Pervasives,$call2,$caml_jsbytes_of_string,$cst_g) {
      $bf = $call2($Pervasives[16], $cst_g, $f)->toString();
      $be = 0;
      $bg = $caml_jsbytes_of_string($s);
      $bh = $Js_of_ocaml_Js[11];
      return (function(dynamic $t8, dynamic $t6, dynamic $t7, dynamic $param) {return new $t8($t6, $t7);
       })($bh, $bg, $bf, $be);
    };
    $blunt_str_array_get = function(dynamic $a, dynamic $i) use ($Assert_failure,$Js_of_ocaml_Js,$am,$call2,$caml_js_to_byte_string,$runtime) {
      $bc = function(dynamic $param) use ($Assert_failure,$am,$runtime) {
        throw $runtime["caml_wrap_thrown_exception"](Vector{0, $Assert_failure, $am}) as \Throwable;
      };
      $bd = $call2($Js_of_ocaml_Js[16], $a, $i);
      return $caml_js_to_byte_string($call2($Js_of_ocaml_Js[6][8], $bd, $bc));
    };
    $string_match = function(dynamic $r, dynamic $s, dynamic $i) use ($Js_of_ocaml_Js,$call1,$call2,$caml_get_public_method,$caml_jsbytes_of_string) {
      $a7 = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 180472028, 24), $x);
      };
      ((function(dynamic $t12, dynamic $t11, dynamic $param) {$t12->lastIndex = $t11;return 0;
        })($r, $i, $a7));
      $a8 = $Js_of_ocaml_Js[21];
      $a9 = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, -1021447279, 25), $x);
      };
      $a_ = $caml_jsbytes_of_string($s);
      $ba = (function(dynamic $t10, dynamic $t9, dynamic $param) {return $t10->exec($t9);
       })($r, $a_, $a9);
      $bb = $call2($Js_of_ocaml_Js[5][3], $ba, $a8);
      return $call1($Js_of_ocaml_Js[5][10], $bb);
    };
    $search = function(dynamic $r, dynamic $s, dynamic $i) use ($Js_of_ocaml_Js,$call1,$call2,$caml_get_public_method,$caml_jsbytes_of_string) {
      $a0 = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 180472028, 26), $x);
      };
      ((function(dynamic $t17, dynamic $t16, dynamic $param) {$t17->lastIndex = $t16;return 0;
        })($r, $i, $a0));
      $a1 = function(dynamic $res_pre) use ($Js_of_ocaml_Js,$call1,$caml_get_public_method) {
        $res = $call1($Js_of_ocaml_Js[21], $res_pre);
        $a6 = function(dynamic $x) use ($call1,$caml_get_public_method) {
          return $call1($caml_get_public_method($x, 1041537810, 27), $x);
        };
        return Vector{
          0,
          (function(dynamic $t15, dynamic $param) {return $t15->index;})($res, $a6),
          $res
        };
      };
      $a2 = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, -1021447279, 28), $x);
      };
      $a3 = $caml_jsbytes_of_string($s);
      $a4 = (function(dynamic $t14, dynamic $t13, dynamic $param) {return $t14->exec($t13);
       })($r, $a3, $a2);
      $a5 = $call2($Js_of_ocaml_Js[5][3], $a4, $a1);
      return $call1($Js_of_ocaml_Js[5][10], $a5);
    };
    $matched_string = function(dynamic $r) use ($blunt_str_array_get) {
      return $blunt_str_array_get($r, 0);
    };
    $matched_group = function(dynamic $r, dynamic $i) use ($Js_of_ocaml_Js,$call1,$call2,$caml_js_to_byte_string) {
      $aW = function(dynamic $aZ) use ($caml_js_to_byte_string) {
        return $caml_js_to_byte_string($aZ);
      };
      $aX = $call2($Js_of_ocaml_Js[16], $r, $i);
      $aY = $call2($Js_of_ocaml_Js[6][3], $aX, $aW);
      return $call1($Js_of_ocaml_Js[6][10], $aY);
    };
    $an = 0;
    $ao = "g";
    $ap = "[\\$]";
    $aq = $Js_of_ocaml_Js[11];
    $quote_repl_re = (function
     (dynamic $t20, dynamic $t18, dynamic $t19, dynamic $param) {return new $t20($t18, $t19);
     })($aq, $ap, $ao, $an);
    $quote_repl = function(dynamic $s) use ($call1,$caml_get_public_method,$caml_jsbytes_of_string,$quote_repl_re) {
      $aT = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 724060212, 29), $x);
      };
      $aU = "\\$\\$\\$\\$";
      $aV = $caml_jsbytes_of_string($s);
      return (function
       (dynamic $t23, dynamic $t21, dynamic $t22, dynamic $param) {return $t23->replace($t21, $t22);
       })($aV, $quote_repl_re, $aU, $aT);
    };
    $global_replace = function(dynamic $r, dynamic $s, dynamic $s_by) use ($call1,$caml_get_public_method,$caml_js_to_byte_string,$caml_jsbytes_of_string,$quote_repl) {
      $aO = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 180472028, 30), $x);
      };
      $aP = 0;
      ((function(dynamic $t28, dynamic $t27, dynamic $param) {$t28->lastIndex = $t27;return 0;
        })($r, $aP, $aO));
      $aQ = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 724060212, 31), $x);
      };
      $aR = $quote_repl($s_by);
      $aS = $caml_jsbytes_of_string($s);
      return $caml_js_to_byte_string(
        (function(dynamic $t26, dynamic $t24, dynamic $t25, dynamic $param) {return $t26->replace($t24, $t25);
         })($aS, $r, $aR, $aQ)
      );
    };
    $replace_first = function(dynamic $r, dynamic $s, dynamic $s_by) use ($Js_of_ocaml_Js,$call1,$caml_get_public_method,$caml_js_to_byte_string,$caml_jsbytes_of_string,$quote_repl) {
      $aF = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, -1042090782, 32), $x);
      };
      $match = (int)
      (function(dynamic $t36, dynamic $param) {return $t36->ignoreCase;})($r, $aF);
      $aG = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 504484589, 33), $x);
      };
      $match__0 = (int)
      (function(dynamic $t37, dynamic $param) {return $t37->multiline;})($r, $aG);
      $flags = 0 === $match
        ? 0 === $match__0 ? "" : ("m")
        : (0 === $match__0 ? "i" : ("mi"));
      $aH = 0;
      $aI = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 842117339, 34), $x);
      };
      $aJ = (function(dynamic $t32, dynamic $param) {return $t32->source;})($r, $aI);
      $aK = $Js_of_ocaml_Js[11];
      $r__0 = (function
       (dynamic $t35, dynamic $t33, dynamic $t34, dynamic $param) {return new $t35($t33, $t34);
       })($aK, $aJ, $flags, $aH);
      $aL = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 724060212, 35), $x);
      };
      $aM = $quote_repl($s_by);
      $aN = $caml_jsbytes_of_string($s);
      return $caml_js_to_byte_string(
        (function(dynamic $t31, dynamic $t29, dynamic $t30, dynamic $param) {return $t31->replace($t29, $t30);
         })($aN, $r__0, $aM, $aL)
      );
    };
    $list_of_js_array = function(dynamic $a) use ($blunt_str_array_get,$call1,$caml_get_public_method) {
      $aux = function(dynamic $accu, dynamic $idx) use ($a,$blunt_str_array_get) {
        $accu__0 = $accu;
        $idx__0 = $idx;
        for (;;) {
          if (0 <= $idx__0) {
            $idx__1 = (int) ($idx__0 + -1);
            $accu__1 = Vector{0, $blunt_str_array_get($a, $idx__0), $accu__0};
            $accu__0 = $accu__1;
            $idx__0 = $idx__1;
            continue;
          }
          return $accu__0;
        }
      };
      $aE = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 520590566, 36), $x);
      };
      return $aux(
        0,
        (int)
        ((function(dynamic $t38, dynamic $param) {return $t38->length;})($a, $aE) + -1)
      );
    };
    $split = function(dynamic $r, dynamic $s) use ($Js_of_ocaml_Js,$call1,$caml_get_public_method,$caml_jsbytes_of_string,$list_of_js_array) {
      $az = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 180472028, 37), $x);
      };
      $aA = 0;
      ((function(dynamic $t42, dynamic $t41, dynamic $param) {$t42->lastIndex = $t41;return 0;
        })($r, $aA, $az));
      $aB = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, -394261074, 38), $x);
      };
      $aC = $caml_jsbytes_of_string($s);
      $aD = (function(dynamic $t40, dynamic $t39, dynamic $param) {return $t40->split($t39);
       })($aC, $r, $aB);
      return $list_of_js_array($call1($Js_of_ocaml_Js[20], $aD));
    };
    $bounded_split = function(dynamic $r, dynamic $s, dynamic $i) use ($Js_of_ocaml_Js,$call1,$caml_get_public_method,$caml_jsbytes_of_string,$list_of_js_array) {
      $au = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 180472028, 39), $x);
      };
      $av = 0;
      ((function(dynamic $t47, dynamic $t46, dynamic $param) {$t47->lastIndex = $t46;return 0;
        })($r, $av, $au));
      $aw = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, -203798452, 40), $x);
      };
      $ax = $caml_jsbytes_of_string($s);
      $ay = (function
       (dynamic $t45, dynamic $t43, dynamic $t44, dynamic $param) {return $t45->split($t43, $t44);
       })($ax, $r, $i, $aw);
      return $list_of_js_array($call1($Js_of_ocaml_Js[20], $ay));
    };
    $quote_re = $regexp($cst);
    $quote = function(dynamic $s) use ($call1,$caml_get_public_method,$caml_js_to_byte_string,$caml_jsbytes_of_string,$quote_re) {
      $ar = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 724060212, 41), $x);
      };
      $as = "\\\\$&";
      $at = $caml_jsbytes_of_string($s);
      return $caml_js_to_byte_string(
        (function(dynamic $t50, dynamic $t48, dynamic $t49, dynamic $param) {return $t50->replace($t48, $t49);
         })($at, $quote_re, $as, $ar)
      );
    };
    $regexp_string = function(dynamic $s) use ($quote,$regexp) {
      return $regexp($quote($s));
    };
    $regexp_string_case_fold = function(dynamic $s) use ($quote,$regexp_case_fold) {
      return $regexp_case_fold($quote($s));
    };
    $Js_of_ocaml_Regexp = Vector{
      0,
      $regexp,
      $regexp_case_fold,
      $regexp_with_flag,
      $quote,
      $regexp_string,
      $regexp_string_case_fold,
      $string_match,
      $search,
      $search,
      $matched_string,
      $matched_group,
      $global_replace,
      $replace_first,
      $split,
      $bounded_split
    };
    
    $runtime["caml_register_global"](
      34,
      $Js_of_ocaml_Regexp,
      "Js_of_ocaml__Regexp"
    );

  }
}